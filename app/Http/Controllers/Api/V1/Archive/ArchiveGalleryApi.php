<?php

namespace App\Http\Controllers\Api\V1\Archive;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ArchiveGallery;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArchiveGalleryApi extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $filter = $request->filter ? $request->filter : '';

        $query = ArchiveGallery::select();

        if (!empty($filter)) {
            $searchFields = [
                'title', 'slug', 'path'
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
            'title'         => 'required|unique:archive_galleries',
            'file'          => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'description'   => 'required'
        ];

        $messages = [
            'title.required'        => 'Judul wajib diisi.',
            'title.unique'          => 'Judul sudah terdaftar.',
            'description.required'  => 'Deskripsi wajib diisi.',
            'file'                  => 'File wajib diisi.',
            'file.max'              => 'File maksimal berukurakan 1mb.',
            'file.mimse'            => 'File harus berformat jpeg/png/jpg.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $imagePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/galleries/archives', uniqid('img_') . '.' . $imagePath->extension(), 'public');
            }

            $response = ArchiveGallery::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'path' => $path,
                'description' => $request->description
            ]);

            return ResponseFormatter::success($response);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th);
        }
    }

    public function findById($id)
    {
        try {
            $data = ArchiveGallery::findOrFail($id);

            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }

    public function findBySlug($slug)
    {
        try {
            $data = ArchiveGallery::findOrFail('slug', '=', $slug);

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
            'file'          => 'image|mimes:jpeg,png,jpg|max:1024',
            'description'   => 'required'
        ];

        $messages = [
            'title.required'        => 'Judul wajib diisi.',
            'title.unique'          => 'Judul sudah terdaftar.',
            'description.required'  => 'Deskripsi wajib diisi.',
            'file'                  => 'File wajib diisi.',
            'file.max'              => 'File maksimal berukurakan 1mb.',
            'file.mimse'            => 'File harus berformat jpeg/png/jpg.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $imagePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/galleries/archives', uniqid('img_') . '.' . $imagePath->extension(), 'public');
            }

            $response = ArchiveGallery::findOrFail($id);
            $update = $response->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
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
            $data = ArchiveGallery::findOrFail($id)->delete();
            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }
}
