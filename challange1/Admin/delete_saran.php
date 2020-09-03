<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM aspirasi");

 if($delete){
	header('location: saran.php');
}
else{
	echo 'Gagal upload';
}

?>
