<?php

namespace App\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

final class PostRegisterController
{
    public function __invoke()
    {
        $user = new \User();
        $u = \request()->all();
        $user->name = \request()->get('fullname');
        $user->email = \request()->get('email');
        $user->password = password_hash(\request()->get('Password'),PASSWORD_BCRYPT);
        $user->save();
        return header('Location: http://www.localhost/register_sucsess.php');
    }
}
