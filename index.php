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

class Shop{
    private $name1; //только внутри самого класса


    public function naming(){
        $this ->name1 = "Adidas";
        echo $this->name1;
    }
}

$product = new Shop;
$product->naming();
echo "<br>";
class User{
    public $name= "Имя";
    public $password= "Пароль";
    public $email= "Емэйл";
    public $city= "Город";
}

$admin = new User();
$user1 = new User();
$admin->name = "Леха";
$user1->name = "Андрей";
echo $admin->name;
echo $user1->name;


$user1->surname = "Ivanov";
echo $user1->surname;


?>



</body>
</html>