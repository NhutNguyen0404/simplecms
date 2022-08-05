<?php

namespace App\Services\Admin\Auth;

use Illuminate\Support\Facades\Auth;

class AdminAuthService implements AdminAuthServiceInterface
{
    protected $guard;
    protected $role;

    public function __construct()
    {
        $this->guard = config('setting.guards.admin');
    }

    public function login($email, $password, $isRemember = false)
    {
        $credentials = [
            'email' => $email,
            'password' => $password,
            'status' => config('setting.user.status.active.id'),
        ];

        return Auth::guard($this->guard)->attempt($credentials, $isRemember);
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }
}
