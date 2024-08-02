<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller as BaseController;

class CheckoutController extends BaseController
{
    public function index()
    {
        return view('client.pages.checkout');
    }
}
