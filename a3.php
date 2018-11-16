<?php
$a1 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5));


$a2 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5));

$mulArray = array();

$result = array();

	for ($i=0;$i< =1;$i++){
		for($j=0;$j< =1;$j++){
			$result[$i][$j]=0;
			for($k=0;$k<2;$k++){
				$result[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
			}
		}
	}
	
echo "<p>matrix one</p>" ;
echo "<pre/>";print_r($a1);
echo "<p>matrix two</p>" ;
echo "<pre/>";print_r($a2);
echo "<p> matrix multiplication </p> ";
echo "<pre/>";print_r($result);



?>
