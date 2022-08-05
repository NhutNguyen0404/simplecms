<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends AdminController
{
    protected $module = 'home';

    public function index()
    {
        return $this->getView();
    }
}
