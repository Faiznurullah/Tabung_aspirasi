<?php
session_start();

if($_SESSION['password']=='')
{
    header("location: cek.php");
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

    <!---ini adalah css native-->
    <link rel="stylesheet" href="/style/style.css" type="css/text">

    <!--tag dicoding-->
     <meta name="dicoding:email" content="faizn103a@gmail.com">


  <title>Survey</title>

  </head>
  <body style="background-color: #e8d8ff;">

  <center>  <div class="card  bg-light mb-3 mt-4" style="width: 80%; height: 35%;">
      <div class="card-header">Selamat Survey Kota Kita</div>
      <div class="card-body">
        <center><img src="../img/logo.png"></center>
        <p class="card-text"><center><P><h5>Silahkan Di isi pertanyaan-pertanyaan tersebut!</h5></p></center></p>
      </div>

</center>


<center>
<form action="" method="post" name='kirim'>
<div class="card w-75 ml-5 mt-5">
  <div class="card-body">
<label>Nama Anda:</label>
<input class="form-control" type="text" name='nama' placeholder="Nama Anda...." required>

  </div>
</div>

<div class="card w-75 ml-5 mt-5">
  <div class="card-body">
<p>Menurut Anda Penataan Kota Kita Apakah Sudah Tertata Rapih?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='susunan' id="inlineRadio1" value="Bagus">
  <label class="form-check-label" for="inlineRadio1">Bagus</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='susunan' id="inlineRadio2" value="Kurang">
  <label class="form-check-label" for="inlineRadio2">Kurang</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='susunan' id="inlineRadio2" value="Jelek">
  <label class="form-check-label" for="inlineRadio2">Jelek</label>
</div>

  </div>
</div>


<div class="card w-75 ml-5 mt-5">
  <div class="card-body">

<p>Menurut Anda Apakah Sistem Pendidikan Sudah Layak?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='sekolah' id="inlineRadio1" value="Layak">
  <label class="form-check-label" for="inlineRadio1">Layak</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='sekolah' id="inlineRadio2" value="Cukup">
  <label class="form-check-label" for="inlineRadio2">Cukup Layak</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name='sekolah' id="inlineRadio2" value="Kurang">
  <label class="form-check-label" for="inlineRadio2">Kurang Layak</label>
</div>


  </div>
</div>


<div class="card w-75 ml-5 mt-5 mb-4">
  <div class="card-body">
<p>Apa Saran Anda Untuk Kemajuan Kota Kita ?</p>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Tulis Saran:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name='saran' rows="3" type="text" required></textarea>
  </div>


  </div>
</div>

<div class="row mb-4">

  <div class="col-md-4">
  </div>

  <div class="col-md-4">
<center><input type="submit" class="btn btn-primary  btn-block" value='Kirim' name='kirim'></center>
</div>


<div class="col-md-2">
  <a href="logout.php"><button type="button" class="btn btn-info">Logout</button></a>
</div>


</form>
</center>
</div>

<?php
 if(isset($_POST['kirim'])){
  $nama = htmlspecialchars($_POST['nama']);
  $susun = htmlspecialchars($_POST['susunan']);
  $sekolah = htmlspecialchars($_POST['sekolah']);
  $saran = htmlspecialchars($_POST['saran']);

  $insert_aspirasi = mysqli_query($conn, "INSERT INTO aspirasi VALUES (
   NULL,
  '$nama',
  '$susun',
  '$sekolah'
  )");

  $insert_masukan =  mysqli_query($conn, "INSERT INTO masukan VALUES (
   NULL,
  '$nama',
  '$saran'
  )");

  if($insert_aspirasi && $insert_masukan){
  echo '<div class="alert alert-info mt-4" role="alert">';
  echo '<center>Terima Kasih Sudah Mengirimkan Saran Untuk Kami</center>';
  echo ' </div>';

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
