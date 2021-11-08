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
//трейт - Трейт это механизм обеспечения повторного использования кода.


trait Hello{
    public function sayHello(){
        echo "Hello ";
    }
}
trait World{
    public function sayWorld(){
        echo "World ";
    }
}
class myHelloWorld  {
    use Hello, World;
}

$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();


?>
</body>
</html>