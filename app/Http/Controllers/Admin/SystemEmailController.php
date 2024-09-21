<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

class SystemEmailController extends Controller
{
    public function index()
    {
        return view('admin.pages.system-email.index');
    }

    public function create()
    {
        return view('admin.pages.system-email.create');
    }

    public function edit($id)
    {
        return view('admin.pages.system-email.edit')->with([
            'id' => $id
        ]);
    }
}
