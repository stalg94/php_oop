<?php
namespace Home;
class User{

    private $name;
    private $city;
    private $password;
    private $email;

    function __construct($name,$city,$password,$email) {
        $this->name = $name;
        $this->city = $city;
        $this->password = $password;
        $this->email = $email;
    }
    function getInfo(){
        $information = "{$this->name}"." "."{$this->city}"." "."{$this->password}"." "."{$this->email}"." ";
        return $information;
    }
}
$obj = new \Home\User("Alexey","Narva", "sat28375sat","28@gmail.com");
echo $obj->getInfo();


?>
