<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Utils\Enum\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserApi extends Controller
{
    public function findAll(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $filter = $request->filter ? $request->filter : '';

        $query = User::select();

        if (!empty($filter)) {
            $searchFields = [
                'name', 'role'
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
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => 'in:' . UserRole::SUPERADMIN . ',' . UserRole::ADMIN . ',' . UserRole::MEMBER
        ];

        $messages = [
            'name.required'     => 'Nama wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal diisi dengan 8 karakter.',
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Email tidak valid.',
            'email.unique'      => 'Email sudah terdaftar.',
            'role.in'           => 'Role tidak valid.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        $response = User::create([
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
            "role" => $request->role ? $request->role : null
        ]);

        return ResponseFormatter::success($response);
    }

    public function findById($id)
    {
        try {
            $data = User::findOrFail($id);

            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name'  => 'required',
            'email' => 'required|email',
            'role' => 'in:' . UserRole::SUPERADMIN . ',' . UserRole::ADMIN . ',' . UserRole::MEMBER

        ];

        $messages = [
            'name.required'     => 'Nama wajib diisi.',
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Email tidak valid.',
            'email.unique'      => 'Email sudah terdaftar.',
            'role.in'           => 'Role tidak valid.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return ResponseFormatter::error(null, $validator->errors()->all());
        }

        try {
            $data = User::findOrFail($id);
            $data->update([
                "name" => $request->name,
                "email" => $request->email,
                "role" => $request->role
            ]);
            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            if ($th->errorInfo[1] == 1062) {
                return ResponseFormatter::error(null, 'Email sudah terdaftar!');
            }
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }

    public function destroy($id)
    {
        try {
            $data = User::findOrFail($id)->delete();
            return ResponseFormatter::success($data);
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'data user tidak ditemukan!');
        }
    }
}
