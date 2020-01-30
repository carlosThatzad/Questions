<?php


namespace Q\Controllers;
use Q\Models\Question;

class QuestionController

{

    public static function create_question($question,$user_id){

        $question=Question::create(

            ['question'=>$question,
             'user_id'=>$user_id]
        );
        echo "Pues ya has creado la question bro !";
        return $question;

    }
    public static function get_questions_with_user(){
        return Question::with('User')->get()->toJson();


    }
}