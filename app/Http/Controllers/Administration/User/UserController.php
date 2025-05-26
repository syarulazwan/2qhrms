<?php

namespace App\Http\Controllers\Administration\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Administration\UserService;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(){
        return view('admin/pages/administration/user/user');
    }

    public function ajaxuser()
    {
        $users = $this->userService->getUsers();

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
