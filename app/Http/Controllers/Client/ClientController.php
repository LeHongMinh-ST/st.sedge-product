<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ClientController extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
