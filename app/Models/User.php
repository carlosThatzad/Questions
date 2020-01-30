<?php


namespace Q\Models;
use Q\Models\Question;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{

    protected $table='users';
    protected $fillable=['username' , 'email', 'password'];




    public function question(){

        return $this->hasMany('Question');//busca las claves foraneas "buscame la collecioin que cumple con que este usuario tiene tales preguntas"

    }



}