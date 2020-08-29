<?php

namespace App\Controller;

use Illuminate\Http\Request;

final class GetLoginController
{
    public function __invoke()
    {
        return view('login');
    }
}
