<?PHP 


define('CHARSET','ISO-8859-1');
$objResponse = new stdClass();

include("../conexion.php");
$cn = Conectarse();



$sql = "";


$ejecutar = mysql_query($sql,$cn) or die(mysql_error());

 if(!$ejecutar){

 	$objResponse->Registrado = 0;

 }else{

 	$objResponse->Registrado = 1;
 }

 
 echo json_encode($objResponse);
?>