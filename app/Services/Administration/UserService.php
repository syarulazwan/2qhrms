<?php

namespace App\Services\Administration;
use App\Models\User;

class UserService
{
    public function getUsers()
    {
        return User::select('id', 'name', 'email')->get();
    }
}
