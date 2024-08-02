<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.pages.orders.index');
    }
    public function indexPending()
    {
        return view('admin.pages.orders.indexPending');
    }
}
