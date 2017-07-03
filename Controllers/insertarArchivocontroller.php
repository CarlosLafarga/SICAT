<?php

$nombre =$_POST["codigo"];
$archivo = $_FILES["archivo"];

foreach ($archivo as $key => $value) {
	echo $key.''.$value.'---->';
}
?>