<?php
	function pembagian($angka1, $angka2){
		$hasil=$angka1/$angka2;
		return $hasil;
	}
	
	$hasil=pembagian(6,4);
	echo "Pembagian 6 / 4 adalah $hasil";
	echo "<br/>";
	echo "Pembagian 20 / 6 adalah ".pembagian(20,6);
?>