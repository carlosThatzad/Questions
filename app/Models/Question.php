<?php


namespace Q\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Q\Models\User as User;

class Question extends Eloquent {

    protected $table = 'questions';
    protected $fillable = ['question', 'user_id'];

    public function user() {

        return $this -> belongsTo('Q\Models\User');
        //return $this -> belongsTo('Q\Models\User');

    }

}