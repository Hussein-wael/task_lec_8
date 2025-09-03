<?php 
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
echo "Nothing happens";

}else {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo " your name is >> $username"."<br>";
    echo " your email is >> $email"."<br>";
    echo " your password is >> $password"."<br>";
}
?>