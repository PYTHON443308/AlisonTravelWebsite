
<?php
if(isset($_POST['send'])){
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone     = $_POST['phone'];
$address  = $_POST['address'];
$pass = $_POST['pass'];
$travel = $_POST['travel'];

$connection = new mysqli('localhost','root','','register_db');
if($connection->connect_error){
    die("Sorry your connection fail".$connection->connect_error);
}else{
    $stmt = $connection->prepare("insert into register_form(name,email,phone,address,pass,travel) 
    value(?,?,?,?,?,?)");
    $stmt -> bind_param("ssisss", $name, $email, $phone, $address, $pass, $travel);
    $stmt->execute();
    echo ("Successfully Done!");
    $stmt->close();
    $connection->close();  
}
}
?>