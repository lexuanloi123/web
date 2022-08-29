<?php

/////câu a

        $sum = 0;  
		for($x=1; $x <= 20; $x++)  
		{  
		  $sum +=$x; 
		}  
		echo "Tổng dãy số từ 1 đến 20 là $sum"."<br>"; 

///////câu b
		/* $dem1 = 0;
		echo ("tất cả các ước của 20 là <br>");
		for($i = 1; $i< 20; $i++){
			if(20 % $i ==0){
				echo(" ",$dem1);
			}
		} */

//////c
		function uoc($n){
			/////số
			if($n<2){
				return false;
			}
			$squareRoot = sqrt ($n);
			for($i = 2; Si <= $squareRoot; $i++){
				if($n % $i ==0){
					return false;
				}
			}
			return true;
		}
		$n =31
		echo "<br>";
		echo ("tất cả các ước số nguyến tố $s là <br>");
		if($i>=1){
			echo "1";
		}
		for($i =3 ; $i< $n; $i+=2){
			if(uoc($n % $i ==0)){
				echo(" ".$i);
			}
		}

?>