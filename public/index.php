<?php

require_once '../vendor/autoload.php';

require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

class User extends \Illuminate\Database\Eloquent\Model{

}



$router->get('/login',\App\Controller\GetLoginController::class)->name('login');
$router->post('/login',\App\Controller\PostLoginController::class);
$router->get('/forgot-password',\App\Controller\GetForgotPasswordController::class);
$router->get('/register',\App\Controller\GetRegisterController::class);
$router->post('/register',\App\Controller\PostRegisterController::class);



$request = \Illuminate\Http\Request::createFromGlobals();
$response = $router->dispatch($request);
echo $response->getContent();


/**
 CREATE TABLE `users` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`updated_at` datetime NOT NULL,
`created_at` datetime NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `users_username_uindex` (`name`),
UNIQUE KEY `users_email_uindex` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1
 */