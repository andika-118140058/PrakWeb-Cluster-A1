<!DOCTYPE html>
<html>
	<head>
		<title>Fungsi menghitung harga bet</title>
	</head>
	<body>
		<h2>Fungsi Harga Bet</h2>
		<form action="Tugas2_118140058.php" method="post">
			<label>Masukan Nama : </label>
			<input type="text" name="nama"><br><br>
			<label>Masukan Warna : </label>
			<input type="text" name="warna"><br>
			<input type="submit" name="kirim" value="Kirim">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["kirim"])){
		function harga_bet($nama, $warna="black"){
			$panjang_nama=strlen($nama);
			if($panjang_nama>=1 && $panjang_nama<=10){
				$harga = $panjang_nama*300;
			}
			elseif($panjang_nama>=11 && $panjang_nama<=20){
				$harga = $panjang_nama*500;
			}
			elseif($panjang_nama>20){
				$harga = $panjang_nama*700;
			}
			echo "<font color= $warna>Nama : $nama</font><br>";
			echo "<font color=$warna>Harga total : Rp. $harga </font><br>";
		}
		$nama=$_POST["nama"];
		$warna=$_POST["warna"];
		harga_bet($nama,$warna);
	}
?>