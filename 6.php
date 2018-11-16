<?php
$fp=fopen("first.txt","r");
$count=fread($fp,10);
fclose($fp);
$count=$count+1;
echo "<p>page viewer". $count ."</p>";
$fp=fopen("first.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
