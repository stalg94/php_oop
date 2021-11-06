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
    public $name;
    public $password;
    public $email;
    public $city;

    //konstruktor
    function __construct($name,$password,$email,$city)
    {
     $this->name=$name;
     $this->password=$password;
     $this->email=$email;
     $this->city=$city;
    }

    function getInfo(){

        $information= "{$this->name}"." "."{$this->password}"." "."{$this->email}"." "."{$this->city}";
        return $information;
    }

}

$user1 = new User("Alex","123456","dsfd@sd.com","Narva");
echo $user1->getInfo();

echo "<br>";

class Moderator extends User{
    public $info;
    public $rights;

    function __construct($name,$password,$email,$city, $info, $rights)
    {
        parent:: __construct($name,$password,$email,$city);
        $this->info=$info;
        $this->rights=$rights;
    }
    function getInfo(){
        $information= parent::getInfo();
        $information .= " "."{$this->info}"." "."{$this->rights}";
        return $information;
    }

} 
$moder = new Moderator("Ivan", "sate28735","dsvd@dcsd.ee","Tallinn", "Moderator","tru");
echo $moder->getInfo();
echo "<br>";
class Test {
    protected $info; //можем еги использовать но не можем его менять
}

class Test2 extends Test{
    public function test(){
        $this->info="info";
        echo $this->info;
    }
}
$test2 = new Test2;
$test2->test();
$test2->info="information";
?>
</body>
</html>