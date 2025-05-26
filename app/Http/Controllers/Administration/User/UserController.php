<?php

namespace App\Http\Controllers\Administration\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('admin/pages/administration/user/user');
    }

    public function ajaxuser()
    {
        $users = User::select('id', 'name', 'email')->get();

        $data = [];
        $counter = 1;

        foreach ($users as $user) {
            $data[] = [
                'no' => $counter++,
                'name' => $user->name ?? '-',
                'email' => $user->email ?? '-',
            ];
        }

        return response()->json([
            'data' => $data
        ]);
    }

}
