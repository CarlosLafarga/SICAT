<?PHP 
$serie = $_POST['subserie'];

define('CHARSET','ISO-8859-1');


$objResponse = new stdClass();

include("../conect/conexion.php");
$cn = Conectarse();



$sql = "SELECT * FROM ct_piezas_eq WHERE no_serie = '".$serie."';";
$ejecutar = mysql_query($sql,$cn) or die(mysql_error());
$resultado = mysql_num_rows($ejecutar);

 if($resultado > 0 ){

 	$objResponse->Registrado = 0;

 }else{

 	$objResponse->Registrado = 1;
 }

 
 echo json_encode($objResponse);
?>