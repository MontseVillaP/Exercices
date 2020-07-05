<?php

//for
echo '<body style="background-color:#CBD691">';
$dia=date('d');
echo "For días: <br>";
for($i=1;$i<=$dia;$i++){
    echo $i. "<br>";
}
//while
$i=1;
echo "While días: <br>";
while ($i<=$dia){
    echo $i. "<br>";
    $i++;
}
//do-while
$i=1;
echo "Do-while días: <br>";
do{
 
    echo $i."<br>";
    $i++;
}while($i<=$dia);





?>