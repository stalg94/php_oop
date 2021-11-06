<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

class User{
    // public $name;
    // public $password;
    // public $email;
    // public $city;

    // public function getName(){
    //     echo $this->name;
    //     $this->test();       
    // }

    // public function test(){
    //     echo 'Test';
    // }

    private static $name;

    public static function setName($name1){
        self::$name = $name1;
    }
    public static function getName(){
        return self::$name;
    }

}
User::setName('Ivan');
echo User::getName();

// $user1 = new User;
// $user1->name = 'Aleksei';
// $user1->getName();

// $user2 = new User;
// $user2->name = 'Ivan';
// $user2->getName();





?>



</body>
</html>