<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<!-- Berfungsi sebagai input gambar -->
<img src="images/full_body.png" id="img1" width="1092px" height="600px" hidden="true">
<img src="sign_result/092839_full_body.png" id="img2" width="1092px" height="600px" hidden="true">

<!-- Hasil output setelah digabung -->
<h2><b>Hasil</b><br><br><canvas id="canvas"></canvas>


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