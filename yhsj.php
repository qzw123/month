<?php 
// 杨辉三角
$n=10;
for ($i=0; $i <$n ; $i++) { 
	for ($j=0; $j <=$i ; $j++) { 
		if($j==0||$j==$i){
			 $arr[$i][$j]=1;
		}else{
			$arr[$i][$j]=$arr[$i-1][$j]+$arr[$i-1][$j-1];
		}
		echo $arr[$i][$j]."\t";
	}
	echo "<br>";
}

 ?>