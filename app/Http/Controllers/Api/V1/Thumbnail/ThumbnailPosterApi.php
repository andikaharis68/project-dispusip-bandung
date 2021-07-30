<?php

namespace App\Http\Controllers\Api\V1\Thumbnail;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ThumbnailPoseter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ThumbnailPosterApi extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $filter = $request->filter ? $request->filter : '';

        $query = ThumbnailPoseter::select();

        if (!empty($filter)) {
            $searchFields = [
                'title', 'description', 'status'
            ];
            $query->where(function ($query) use ($filter, $searchFields) {
                $searchWildcard = '%' . $filter . '%';
                foreach ($searchFields as $field) {
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }
            });
        }

        $data =  $query->paginate($limit);

        return ResponseFormatter::success($data);
    }

    public function create(Request $request)
    {
        $rules = [
            'title'         => 'required|unique:library_galleries',
            'file'          => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'description'   => 'required',
            'status'        => 'required|boolean',
        ];

        $messages = [
            'title.required'    => 'Judul wajib diisi.',
            'title.unique'      => 'Judul sudah terdaftar.',
            'file.required'     => 'File wajib diisi.',
            'file.max'          => 'File maksimal berukurakan 2Mb.',
            'file.mimse'        => 'File harus berformat jpeg/png/jpg.',
            'status.required'   => 'Status wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $imagePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/thumbnail/poster', uniqid('img_') . '.' . $imagePath->extension(), 'public');
            }

            $response = ThumbnailPoseter::create([
                'title' => $request->title,
                'path' => $path,
                'description' => $request->description,
                'status' => $request->status
            ]);

            return ResponseFormatter::success($response);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th);
        }
    }

    public function findById($id)
    {
        try {
            $data = ThumbnailPoseter::findOrFail($id);

            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }

    public function update(Request $request, $id)
    {
        $path = null;
        $rules = [
            'title'         => 'required',
            'file'          => 'image|mimes:jpeg,png,jpg|max:2048',
            'description'   => 'required'
        ];

        $messages = [
            'title.required'    => 'Judul wajib diisi.',
            'title.unique'      => 'Judul sudah terdaftar.',
            'file.max'          => 'File maksimal berukurakan 2Mb.',
            'file.mimse'        => 'File harus berformat jpeg/png/jpg.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $imagePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/galleries/libraries', uniqid('img_') . '.' . $imagePath->extension(), 'public');
            }

            $response = ThumbnailPoseter::findOrFail($id);
            $update = $response->update([
                'title' => $request->title,
                'path' => $path ?: $response->path,
                'description' => $request->description
            ]);

            return ResponseFormatter::success($update);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th);
        }
    }

    public function destroy($id)
    {
        try {
            $data = ThumbnailPoseter::findOrFail($id)->delete();
            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data thumbnail tidak ditemukan!');
        }
    }
}
