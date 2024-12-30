<?php 

// function fun() {
// 	$a=100 ;
// 	$b=90 ;
// 	if($a==100 && $b==90) {
// 		return  $a.'<br>'.$b ;
// 	}
// 	else {
// 		return "-1";
// 	}
// }

// echo fun() ;

function Arrayfun() {
	$car=array("BMW" , "VOLVO" , "TATA", "THAR" ) ;
	foreach($car as $val) {
		echo $val.'<br>' ;
	}
}

echo Arrayfun() ;

echo $_SERVER['REMOTE_ADDR'] ;

?>