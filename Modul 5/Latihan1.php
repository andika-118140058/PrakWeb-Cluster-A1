<?php
	$bilangan1 = 20;
	$bilangan2 = 5;
	
	#Operator aritmatika penjumlahan
	$jumlah = $bilangan1 + $bilangan2;
	
	//Operator aritmatika pengurangan
	$kurang = $bilangan1 - $bilangan2;
	
	/*Operator aritmatika perkalian*/
	$kali = $bilangan1 * $bilangan2;
	
	#Operator aritmatika pembagian
	$bagi = $bilangan1 / $bilangan2;
	
	/*Operator aritmatika modulus*/
	$mod = $bilangan1 % $bilangan2;
	
	//Menampilkan pada browser
	echo "Bilangan 1 = ".$bilangan1."<br>";
	echo "Bilangan 2 = ".$bilangan2."<br><br>";
	echo "Berikut merupakan hasil dari setiap operasi<br><br>";
	echo "PENJUMLAHAN<br>";
	echo "Operator : + <br>";
	echo "Hasil : ".$jumlah."<br><br>";
	echo "PENGURANGAN<br>";
	echo "Operator : - <br>";
	echo "Hasil : ".$kurang."<br><br>";
	echo "PERKALIAN<br>";
	echo "Operator : * <br>";
	echo "Hasil : ".$kali."<br><br>";
	echo "PEMBAGIAN<br>";
	echo "Operator : / <br>";
	echo "Hasil : ".$bagi."<br><br>";
	echo "MODULUS<br>";
	echo "Operator : % <br>";
	echo "Hasil : ".$mod."<br><br>";
?>