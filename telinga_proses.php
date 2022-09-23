<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ear Sign</title>
</head>
<body>
<img src='images/ear.png' id='img1' width='1092px' height='600px' hidden='true'>
<?php
	$sig_string=$_POST['signature'];
	// date("his") -> bisa digandi dengan ID rekam medik / id pasien
	$nama_file="sign_result/".date("his").'_ear'.".png";
	file_put_contents($nama_file, file_get_contents($sig_string));
	if(file_exists($nama_file)){
		echo "<p>File Signature berhasil disimpan - ".$nama_file."</p>";
		// proses menandai dengan meng overlayer 2 gambar (base gambar + sign)
		
		echo "<img src='".$nama_file."' id='img2' width='1092px' height='600px' hidden='true'>";
		
	}
?>

<h2><b>Hasil</b><br><br><canvas id="canvas"></canvas>

</body>
<script>
// Javascript
window.onload = function () {

// Mensetting Variabel
    var img1 = document.getElementById('img1');
    var img2 = document.getElementById('img2');
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    var width = img2.width;
    var height = img2.height;
    canvas.width = width;
    canvas.height = height;

// Fungsi untuk men-draw gambar
    context.drawImage(img1, 0, 1, width, height);
    var image1 = context.getImageData(0, 0, width, height);
    var imageData1 = image1.data;
    context.drawImage(img2, 0, 0, width, height);
    var image2 = context.getImageData(0, 0, width, height);
    var imageData2 = image2.data;
};
</script>
</html>
