<?php

namespace App\Http\Controllers\Api\V1\Archive;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ArchiveLaw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArchiveLawApi extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $filter = $request->filter ? $request->filter : '';

        $query = ArchiveLaw::select();

        if (!empty($filter)) {
            $searchFields = [
                'description', 'path', 'title'
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
            'file'          => 'required|mimes:pdf|max:2048',
            'title'         => 'required|unique:archive_laws',
            'description'   => 'required'
        ];

        $messages = [
            'description.required'  => 'Deskripsi wajib diisi.',
            'title.required'        => 'Judul wajib diisi.',
            'title.unique'          => 'Judul sudah terdaftar.',
            'file'                  => 'File wajib diisi.',
            'file.max'              => 'File maksimal berukurakan 2mb.',
            'file.mimes'            => 'File harus berformat pdf.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $filePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/archives/laws', uniqid('archive_law_') . '.' . $filePath->extension(), 'public');
            }

            $response = ArchiveLaw::create([
                'descriptipn' => $request->description,
                'path' => $path
            ]);

            return ResponseFormatter::success($response);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, $th);
        }
    }

    public function findById($id)
    {
        try {
            $data = ArchiveLaw::findOrFail($id);

            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data tidak ditemukan!');
        }
    }

    public function update(Request $request, $id)
    {
        $path = null;
        $rules = [
            'file'          => 'mimes:pdf|max:2048',
            'title'         => 'required',
            'description'   => 'required'
        ];

        $messages = [
            'description.required'  => 'Deskripsi wajib diisi.',
            'title'                 => 'Judul wajib diisi.',
            'file'                  => 'File wajib diisi.',
            'file.max'              => 'File maksimal berukurakan 2mb.',
            'file.mimes'            => 'File harus berformat pdf.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            if ($request->file('file')) {
                $imagePath = $request->file('file');
                $path = $request->file('file')->storeAs('/uploads/archives/laws', uniqid('archive_law_') . '.' . $imagePath->extension(), 'public');
            }

            $response = ArchiveLaw::findOrFail($id);
            $update = $response->update([
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
            $data = ArchiveLaw::findOrFail($id)->delete();
            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data tidak ditemukan!');
        }
    }
}
