<?php

namespace App\Controller;


use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

final class PostLoginController
{
    public function __invoke()
    {
        $user = \User::where('email', \request()->get('email'))->get();

        if(password_verify(\request()->get('Password'),$user->first()->password)){
            if(password_needs_rehash($user->first()->password,PASSWORD_ARGON2ID)){
                $user->first()->password = password_hash(\request()->get('Password'),PASSWORD_ARGON2ID);
                $user->first()->save();
            }
            return header('Location: http://www.localhost/login_sucsess.php');
        }
        return header('Location: http://www.localhost/login');
    }
}
