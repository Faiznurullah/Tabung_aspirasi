<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM masukan");

 if($delete){
	header('location: masukan.php');
}
else{
	echo 'Gagal upload';
}

?>
