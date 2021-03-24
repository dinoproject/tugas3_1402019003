<!DOCTYPE html>
<html>
<head>
	<title>Tugas3 3Dcalculator</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<p>daynoCALC</p>
	</header>
	<div class="main">
		<div class="container">
			<div class="judul">3D Kalkulator</div>
			<h1>Selamat <span id="waktu"></span>, <span id="nama"></span></h1>
			<p>Menghitung volume dan luas permukaan dari silinder, kerucut, dan bola.</p>
			<p>&#928; = 3,14</p>
			<div class="Silinder">
				<h1>Silinder</h1>
				<p>Masukkan jari-jari silinder (dalam meter)</p>
				<input type="text" name="jari2" id="thisJ" value="" placeholder="Jari-Jari"><br><br>
				<p>Masukkan tinggi silinder (dalam meter)</p>
				<input type="text" name="tinggi" id="thisTslider" value="" placeholder="Tinggi"><br><br>
				<div class="hitung">
					<span class="button message" onclick="hasilSilinder()">Hitung!</span>	
				</div>
				<!-- <button class="hitung-silinder" onclick="hasilSilinder()">Hitung!</button> -->
				<br><br>
				<h2>Hasil Perhitungan</h2>
				<p>Luas Permukaan: <span id="lp-silinder"></span> m<sup>2</sup></p><br>
				<p>Volume: <span id="vm-silinder"></span> m<sup>3</sup></p>
			</div>
			<div class="Kerucut">
				<h1>Kerucut</h1>
				<p>Masukkan jari-jari Kerucut (dalam meter)</p>
				<input type="text" name="jari2" id="thisJkerucut" value="" placeholder="Jari-Jari"><br><br>
				<p>Masukkan garis pelukis kerucut (dalam meter)</p>
				<input type="text" name="gp" id="thisJgp" value="" placeholder="Garis Pelukis"><br><br>
				<p>Masukkan tinggi kerucut (dalam meter)</p>
				<input type="text" name="tinggi" id="thisTkerucut" value="" placeholder="Tinggi"><br><br>
				<div class="hitung">
					<span class="button message" onclick="hasilKerucut()">Hitung!</span>	
				</div>
				<!-- <button class="hitung-silinder" onclick="hasilSilinder()">Hitung!</button> -->
				<br><br>
				<h2>Hasil Perhitungan</h2>
				<p>Luas Permukaan: <span id="lp-kerucut"></span> m<sup>2</sup></p><br>
				<p>Volume: <span id="vm-kerucut"></span> m<sup>3</sup></p>
			</div>
			<div class="Bola">
				<h1>Bola</h1>
				<p>Masukkan jari-jari Bola (dalam meter)</p>
				<input type="text" name="jari2" id="thisJbola" value="" placeholder="Jari-Jari"><br><br>
				<div class="hitung">
					<span class="button message" onclick="hasilBola()">Hitung!</span>	
				</div>
				<!-- <button class="hitung-silinder" onclick="hasilSilinder()">Hitung!</button> -->
				<br><br>
				<h2>Hasil Perhitungan</h2>
				<p>Luas Permukaan: <span id="lp-bola"></span> m<sup>2</sup></p><br>
				<p>Volume: <span id="vm-bola"></span> m<sup>3</sup></p>
			</div>
		</div>
	</div>
	<footer>
		<div class="header-left">
			<p>Achmad Dino Saputra (1402019003) </p>
		</div>
		<div class="icon-f">
			<p>Instagram</p>
			<a href="https://www.instagram.com/daynosaputraa/" target="_blank" ><img src="instagram.png" ></a>
			<p>Github</p>
			<a href="https://github.com/dinoproject" target="_blank"><img src="github.png"></a>
			<p>Facebook</p>
			<a href="https://www.facebook.com/onidkanahalokes/" target="_blank"><img src="facebook.png"></a>
		</div>
	</footer>
	<script src="script.js"></script>
</body>
</html>
