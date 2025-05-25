<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    protected $service;

    public function __construct(LoginService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('auth.login'); 
    }

    public function store(LoginRequest $request)
    {
        $token = $this->service->login($request->validated());

        if (!$token) {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

        return redirect()->route('dashboard');
    }
}
