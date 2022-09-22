<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$sig_string=$_POST['signature'];
	// date("his") -> bisa digandi dengan ID rekam medik / id pasien
	$nama_file="sign_result/".date("his").'full_body'.".png";
	file_put_contents($nama_file, file_get_contents($sig_string));
	if(file_exists($nama_file)){
		echo "<p>File Signature berhasil disimpan - ".$nama_file."</p>";
		// proses menandai dengan meng overlayer 2 gambar (base gambar + sign)
		echo "<p background-image: url('signature_073802.png');'><img src='".$nama_file."'></p>";
	}
?>

</body>
</html>
