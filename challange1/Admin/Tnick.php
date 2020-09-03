<?php

session_start();

if($_SESSION['password']=='')
{
    header("location:login.php");
}
 include 'db.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--tag dicoding-->
     <meta name="dicoding:email" content="faizn103a@gmail.com">



    <title>Tambah Nick</title>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><p class="text-primary">Tabung<l class="text-white">Aspirasi</p></a>
    </nav>

<h1><p class="text-center">Tambah Nick</p></h1>

    <form class="mt-4" name='kirim' method='post'>
      <div class="row">
        <div class="col">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name='username' required>
        </div>
        <div class="col">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name='password' required>
        </div>
      </div>
      <input type="submit" class="btn btn-info btn-lg btn-block mt-4" value="kirim" name='kirim'>
    </form>


    <?php
     if(isset($_POST['kirim'])){
      $nama = htmlspecialchars($_POST['username']);
      $password = md5($_POST['password']);


      $insert = mysqli_query($conn, "INSERT INTO nick VALUES (
      NULL,
      '$nama',
      '$password'
      )");

      if($insert){
      echo '<div class="alert alert-info mt-4" role="alert">';
      echo '<center>Sukses Menambahkan User</center>';
      echo ' </div>';

    }else{
echo '<div class="alert alert-danger mt-4" role="alert">';
echo '<center>Gagal Menambahkan User</center>';

    }
    }

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
