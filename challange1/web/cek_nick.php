<?php
$username   = addslashes($_POST['username']);
$pass       = md5($_POST['password']);

include 'connect.php';

$user = mysqli_query($connect, "select * from nick where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
	session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['password'] = $row['password'];
    header("location: survey.php");

}
else{
    header("location: cek.php");
}
?>
