<?php
$num = 1;
while($num <= 100){
	if($num % 15 == 0){
		echo 'FizzBuzz'.PHP_EOL; //15の倍数（3と5で割り切れる場合)
	} else if($num % 5 == 0){
		echo 'Buzz'.PHP_EOL; //5の倍数
	} else if($num % 3 == 0){
		echo 'Fizz'.PHP_EOL;
	} else {
		echo $num.PHP_EOL;
	}

	$num = $num+1;	
}
?>
