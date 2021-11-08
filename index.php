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

//abstract - не могут быть созданы экземпляры чтобы  моделировать те или иные сущности

abstract class User{
    public $name;
    public $status;

    abstract function getStatus();
}

class Admin extends User{//дочерний класс
    function getStatus(){
        echo "Admin";
    }
}

$user = new Admin;
$user->getStatus();


?>
</body>
</html>