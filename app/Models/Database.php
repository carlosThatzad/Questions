<?php


namespace Q\Models;


use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
function __construct()
{
    $capsule = new Capsule();
    $capsule->addConnection([   //añadimos la conexion
        'driver'=>DBDRIVER,
        'host'=> DBHOST,
        'database'=>DBNAME,
        'username'=>DBUSER,
        'password'=>DBPASS,
        'charset'=>'utf8',
        'collation'=>'utf8_unicode_ci',
        'prefix'=>''

    ]);
    $capsule->bootEloquent();         //activamos el eloquent para usar los models

}


}