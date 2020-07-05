<?php
echo '<body style="background-color:#D69E91">';
$base=$_POST['base'];
$altura=$_POST['altura'];

$result= ($base * $altura)/2;

echo $result;
?>