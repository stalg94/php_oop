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

    private $name;
    private $city;
    private $id;
    function  __construct($name,$city)
    {
        $this->name=$name;
        $this->city=$city;
    }
    function setId($id){
        $this->id=$id;
    }

    public function __clone(){
        $this->id=0;

    }
}
$user1 = new User("Alexey","Kiev");
$user1->setId(365);
$user2 = clone $user1;
var_dump($user2);


class GetSet{
    private $number = 1;

    public function __get($name){
        echo "You get {$name}";
    }
    public function __set($name, $val){
        echo "You set {$name} to {$val}";
    }
}
$obj = new GetSet();
echo $obj->number;
echo $obj->number = 689;


?>
</body>
</html>