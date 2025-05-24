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

    public function store(LoginRequest $request): JsonResponse
    {
        mpr($request);
        pr($request); 

        $token = $this->service->login($request->validated());

        if (!$token) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
        ]);
    }
}
