<?php

namespace App\Services\Admin\Auth;

interface AdminAuthServiceInterface
{
    /**
     * The method help login
     *
     * @param $email
     * @param $password
     * @param bool|mixed $isRemember
     * @return mixed
     */
    public function login($email, $password, $isRemember = false);

    public function logout();
}
