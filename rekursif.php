<?php 
	$nilai = 5;
	function satu($y, $u){
		if ($y > 0) {
			if ($u > 0) {
				echo "* ";
				$u--;
				satu($y, $u);
			}
			else{
				echo "<br>";
				$y--;
				satu($y, $y);
			}
			
		}
	}
	satu($nilai, $nilai);

	echo "=======================<br><br>";
	$nilai= 5;
	function dua($y, $u, $nilai){
		if ($y <= $nilai) {
			if ($u <= $y) {
				echo "$u";
				$u++;
				dua($y, $u, $nilai);
			}
			else{
				echo "<br>";
				$y++;
				dua($y, 1 ,$nilai);
			}
			
		}
	}
	dua(1,1,$nilai);


?>
