<?php
require_once "index.php";
$obj = new \Home\User("Ivan","Tallinn", "sat28375","stalg28@gmail.com");
echo $obj->getInfo();


?>
