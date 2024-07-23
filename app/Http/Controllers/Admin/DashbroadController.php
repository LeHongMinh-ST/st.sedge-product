<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

class DashbroadController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard.index');
    }
}
