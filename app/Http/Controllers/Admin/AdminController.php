<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    /**
     * @var string $module
     */
    protected $module;

    /**
     * @var object $service
     */
    protected $service;

    /**
     * @var string $adminSpaceView
     */
    protected $adminSpaceView;

    /**
     * @var string $action
     */
    protected $action;

    /**
     * @var array $mappingViews
     */
    protected $mappingViews;

    /**
     * The construct method
     */
    public function __construct()
    {
        $this->adminSpaceView = config('setting.admin_namespace');
        $this->action = $this->getCurrentAction();
    }

    /**
     * The method get view
     *
     * @param $data
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    protected function getView($data = [])
    {
        return view($this->getViewPath($this->action), $data);
    }

    /**
     * The method get view path
     *
     * @param $action
     * @return string
     */
    protected function getViewPath($action)
    {
        $view = $this->mappingViews[$action] ?? $action;
        return "{$this->adminSpaceView}.{$this->module}.{$view}";
    }

    /**
     * The function help get current action
     *
     * @return false|mixed|string
     */
    protected function getCurrentAction()
    {
        $action = explode('@', Route::getCurrentRoute()->getActionName());
        return end($action);
    }
}
