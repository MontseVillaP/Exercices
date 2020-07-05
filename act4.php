<?php

$num=$_POST['num'];
//for
echo "For tabla: <br>";
echo '<body style="background-color:#94D691">';
for($i=1;$i<=10;$i++){
    
    
    $result= $num*$i;
    echo $num. "x".$i."=".$result."<br>";
}
//while
$i=1;
echo "While tabla: <br>";
while ($i<=10){
    
    $result= $num*$i;
    echo $num. "x".$i."=".$result."<br>";
    $i++;
}
//do-while
$i=1;
echo "Do-while tabla: <br>";
do{
    
    $result= $num*$i;
    echo $num. "x".$i."=".$result."<br>";
    
    $i++;
}while($i<=10);





?>