<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Services\Admin\Auth\AdminAuthServiceInterface;

class LoginController extends AdminController
{
    protected $module = 'auth';
    protected $mappingViews = [
        'index' => 'login'
    ];

    public function __construct(AdminAuthServiceInterface $service)
    {
        $this->service = $service;
        parent::__construct();
    }

    public function index()
    {
        return $this->getView();
    }

    public function login(LoginRequest $request)
    {
        $result = $this->service->login(
            $request->get('email'),
            $request->get('password'),
            $request->get('remember')
        );

        if ($result) {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->with('error', trans("Sai tên đăng nhập hoặc mật khẩu!"));
    }
}
