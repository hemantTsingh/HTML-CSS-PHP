<?php

session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','PmM7Bd@1');
mysqli_select_db($con,'hemant');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from registration where name='$name'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){
    echo "username already taken ";
}else{
    $reg=" insert into registration(name , password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successful";

}
?>