 
<?php 
 function time_to_sec($value){
		// $date = substr($value,0,10);
		// $time = substr($value,11,8);
		// $h = substr($time,0,2);
		// $m = substr($time,3,2);
		// $s = substr($time,6,2);
		// $sec1 =($h*3600)+($m*60)+$s;
// 		
		// $time1= time();
// 		
		// $times =$sec1 + strtotime($date);
		
		$var = new DateTime($value);
		$now = new DateTime();
		$dif = $var->format('U') - $now->format('U');
		$secMe = time()- strtotime($value);
		//$sec = $time1-$times;
		//$sec = $sec1+$sec2;
		return age($dif);
    }

function age($value){
	$value =abs($value);
	
		if($value<60){
		$c_time = $value;
		$c_time .=" Sec";
		return $c_time;
		}
		if(($value>=60)&&($value<3600)){
		$c_time = floor($value/60);
		if($c_time >1)
		$c_time .=" Min ";
		else $c_time .=" Min ";
		//$sec =$value%60;
		//if (($sec !=0)&&($sec>1)){
		//$c_time .=$sec;
		//$c_time .=" Seconds ";
		//if ($sec ==1){
		//$c_time .=$sec;
		//$c_time .=" Second ";
		//}
		return $c_time;
		}
		
		if(($value>=3600)&&($value<86400)){
		$c_time = floor($value/3600);
		if($c_time >1)
		$c_time .=" Hrs ";
		else $c_time .=" Hr ";
		//$min = floor(($value%3600)/60);
		//if (($min !=0)&&($min>1)){
		//$c_time .=$min;
		//$c_time .=" Minutes ";
		//}
		//if ($min ==1){
		//$c_time .=$min;
		//$c_time .=" Minute ";
		//}
		return $c_time;
		}
		if(($value>=86400)&&($value<604800)){
		$c_time = floor($value/86400);
		if($c_time >1)
		$c_time .=" Dys ";
		else $c_time .=" Dy ";
		// $h = floor(($value%86400)/3600);
		// if (($h !=0)&&($h>1)){
		// $c_time .=$h;
		// $c_time .=" Hrs ";
		// }
		// if ($h ==1){
		// $c_time .=$h;
		// $c_time .=" Hr ";
		// }
		return $c_time;
		}
		if(($value>=604800)&&($value<2592000)){
		$c_time = floor($value/604800);
		if($c_time >1)
		$c_time .=" Wks ";
		else $c_time .=" Wk ";
		// $d = floor(($value%604800)/86400);
		// if (($d !=0)&&($d>1)){
		// $c_time .=$d;
		// $c_time .=" Days ";
		// }
		// if ($d ==1){
		// $c_time .=$d;
		// $c_time .=" Day ";
		// }
		return $c_time;
		}
		if(($value>=2592000)&&($value<31536000)){
		$c_time = floor($value/2592000);
		if($c_time >1)
		$c_time .=" Mths ";
		else $c_time .=" Mth ";
		// $w = floor(($value%2592000)/604800);
		// if (($w !=0)&&($w>1)){
		// $c_time .=$w;
		// $c_time .=" Weeks ";
		// }
		// if ($w ==1){
		// $c_time .=$w;
		// $c_time .=" Week ";
		// }
		return $c_time;
		}
		if($value>=31536000){
		$c_time = floor($value/31536000);
		if($c_time >1)
		$c_time .=" Yrs ";
		else $c_time .=" Yr "; 
		$m = floor(($value%30240000)/2592000);
		if (($m !=0)&&($m>1)){
		$c_time .=$m;
		$c_time .=" Mths ";
		}
		if ($m ==1){
		$c_time .=$m;
		$c_time .=" Mth ";
		}
		return $c_time;
		}
		}

?>
