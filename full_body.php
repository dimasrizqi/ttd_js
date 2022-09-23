<!DOCTYPE html>
<html>
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Physical Examination</title>
	<link rel="stylesheet" href="libs/css/bootstrap.v3.3.6.css">
	<script type="text/javascript" src="assets/signature.js"></script>
	<style>
		body{
		padding: 15px;
		}
		#note{position:absolute;left:50px;top:35px;padding:0px;margin:0px;cursor:default;}
</style>
</head>
<body>
<h1>Digital Signature</h1>

<form method="post" action="full_body_proses.php" enctype="multipart/form-data">
	<div id="signature-pad">
		
		<canvas id="the_canvas" width="1096px" height="600px" style="background-image: url('images/full_body.png'); width:'1092px';height='600px';"></canvas>
		<div id="note" onmouseover="my_function();"></div>
		<div style="margin:10px;">
			<input type="hidden" id="signature" name="signature">
			<button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span> Clear</button>
			<button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span> Save as PNG</button>
		</div>
	</div>
<form>
	
<script>
var wrapper = document.getElementById("signature-pad");
var clearButton = wrapper.querySelector("[data-action=clear]");
var savePNGButton = wrapper.querySelector("[data-action=save-png]");
var canvas = wrapper.querySelector("canvas");
var el_note = document.getElementById("note");
var signaturePad;
signaturePad = new SignaturePad(canvas, {
    backgroundImage: 'signature_074249.png'
});

clearButton.addEventListener("click", function (event) {
	document.getElementById("note").innerHTML="The signature should be inside box";
	signaturePad.clear();
});
savePNGButton.addEventListener("click", function (event){
	if (signaturePad.isEmpty()){
		alert("Please provide signature first.");
		event.preventDefault();
	}else{
		var canvas  = document.getElementById("the_canvas");
		var dataUrl = canvas.toDataURL();
		document.getElementById("signature").value = dataUrl;
	}
});
function my_function(){
	document.getElementById("note").innerHTML="";
}
</script>
</body>
</html>