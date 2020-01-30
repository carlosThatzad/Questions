<?php


namespace Q\Models;


use Illuminate\Database\Eloquent\Model;
use Q\Models\User;
class Question extends Model
{
    protected $table='questions';
    protected $fillable=['question','user_id'];



    public function user(){
        return $this->belongsTo('User');
    }


}