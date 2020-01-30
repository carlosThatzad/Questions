<?php


namespace Q\Controllers;

use Q\Models\User;

class UserController
{
    public static function create($username,$email,$password){

      $user = User::create(['username'=>$username,
                            'email'=>$email,
                            'password'=>$password]);
        echo "USUARIO CREADO";
        return $user;

    }


}