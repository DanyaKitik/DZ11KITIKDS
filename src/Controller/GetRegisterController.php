<?php

namespace App\Controller;

use Illuminate\Http\Request;

final class GetRegisterController
{
    public function __invoke()
    {
        return view('register');
    }
}
