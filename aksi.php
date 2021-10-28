<?php 

	include "koneksi.php";
	
	date_default_timezone_set('Asia/Jakarta');
    $date = date('d-m-Y'); 
	$email = $_POST['email'];

	if (isset($_POST['kirim'])) {
		$post = mysqli_query($koneksi, "INSERT INTO tbl_post VALUES('','$email','$date')");
		session_start();
        $_SESSION['status'] = 'berhasil';
        header("Location: home.php");
	}

	
	

 ?>