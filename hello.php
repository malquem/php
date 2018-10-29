<?php
    class User {
        public $name = 'User';
        public $email;
    }

    $user = new User();
    echo $user->name, '<br />';
    echo $user->email, '<br />';

    $user->email = 'abc@mail.ru';
    $user_1 = 'Daw';
    echo $user_1->email.'<br />';

    $user_2 = new User();
    $user_2->name = 'Igor';
    $user_2->email = 'abc2@mail.ru';
    echo $user_2->name.'<br />';
    echo $user_2->email.'<br />';
