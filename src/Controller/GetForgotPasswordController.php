<?php

namespace App\Controller;

use Illuminate\Http\Request;

final class GetForgotPasswordController
{
    public function __invoke()
    {
        return view('forgot-password');
    }
}
