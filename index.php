<?php
    require __DIR__.'/vendor/autoload.php';//acceder al autoload
    require 'config.php';//acceder al config
use Q\Controllers\QuestionController;
use Q\Models\Database;
    use Q\Controllers\UserController;
    use Q\Models\User;
    use Q\Models\Question;
    use Illuminate\Database\Capsule\Manager as Capsule;


    new Database();

    print_r(QuestionController::get_questions_with_user());

    //creamos un nuevo usuario

   // $user=UserController::create("user1","user1@gmail.com",password_hash("1234",PASSWORD_BCRYPT));

   // $question=QuestionController::create_question("Donde nació FRANCISCO FRANCO?",'17');

    $users=User::all();

    foreach($users as $user){
    echo $user->email.'<br>';
    }
