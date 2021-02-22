<?php 
$num = 1;

	function get_num($len){
		$rand ='';
		while(!(isset($rand[$len-1]))){
			$rand .=mt_rand(0, 9);
		}
		return substr( $rand , 0 , $len);
	}

	for($i=0; $i<=200; $i++)
		echo $num++  .   "   =  "   . mt_rand(100000000, 999999999) .mt_rand(100, 999) . '<br>';



// function get_num(){
// 	$rand = 0;
// 	for ($i = 0; $i<11; $i++){
// 		$rand .=mt_rand(0, 9);
// 	}

// 	return  $rand . "<br>";
// }


// for($i=0; $i<=199; $i++){
// 	echo $num++ .   "  =   " .get_num();
// }


?>











