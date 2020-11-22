<!DOCTYPE html>
<html>
	<head>
		<title>Fungsi Faktorial</title>
	</head>
	<body>
		<h2>Fungsi untuk menghitung faktorial</h2>
		<form action="Tugas1_118140058.php" method="post">
			<label>Masukan Bilangan : </label>
			<input type="text" name="bilangan">
			<input type="submit" name="kirim" value="Kirim">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["kirim"])){
		function faktorial($bilangan){
			$hasil = 1;
			for($i=1;$i<=$bilangan;$i++){
				$hasil=$hasil*$i;
			}
			echo $hasil;
		}
		$bilangan = $_POST["bilangan"];
		echo "<br>Hasil faktorial dari $bilangan adalah : ";
		faktorial($bilangan);
	}	
?>