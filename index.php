<?php
require __DIR__.'/vendor/autoload.php';
require 'config.php';

use Q\Models\Database;
use Q\Models\User;
use Q\Models\Question;

use Q\Controllers\UserController;
use Q\Controllers\QuestionController;

use Illuminate\Support\Manager as Capsule;

new Database();

//$user = UserController::create("user2", "user2@user.com", password_hash("212121", PASSWORD_BCRYPT));
//$question = QuestionController::create_question("Donde nació Lenin?", "2");
//$question = QuestionController::create_question("Donde está la puerta de Alcalá?", "2");

$users = User::all();
foreach ($users as $user) {
    echo $user -> email.'<br>';
}

print_r(QuestionController::get_questions_with_user());