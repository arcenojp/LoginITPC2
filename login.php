<?php
$conn = mysqli_connect("localhost","root","","arcenio_itpc2");

if(!$conn){
    die("Connection Failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE email ='$email' AND password ='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    echo" Success! ";
    exit();
}else{
    echo" Login Failed! ";
}
mysqli_close($conn);
?>