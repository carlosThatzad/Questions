<?php

namespace Q\Controllers;

use Q\Models\Question;

class QuestionController {

    public static function create_question($question, $user_id) {

        $question = Question::create(['question' => $question,
            'user_id' => $user_id]);
        echo "Question created";
        return $question;

    }

    public static function get_questions_with_user() {

        return Question::with('user') -> get() -> toArray();
        //return Question::with('User') -> get() -> toJson();

    }

}