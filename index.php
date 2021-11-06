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

// class User{
//     public $name;
//     public $password;
//     public $email;
//     public $city;

//     //konstruktor
//     function __construct($name,$password,$email,$city)
//     {
//      $this->name=$name;
//      $this->password=$password;
//      $this->email=$email;
//      $this->city=$city;
//     }

//     function getInfo(){
//         return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
//     }

// }

// $user1 = new User("Alex","123456","dsfd@sd.com","Narva");
// echo $user1->getInfo();
class DestractableClass{
    function __construct()
    {
        print "Konstruktor";
        $this->name = "DestractableClass";
    }

    function __destruct()
    {
        print "Uni4towenie". $this->name;
    }
}
$obj =new DestractableClass;



?>



</body>
</html>