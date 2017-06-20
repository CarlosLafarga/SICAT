<?PHP 
$serie = $_POST['noserie'];
$teclado = $_POST['codteclado'];
$mother = $_POST['codmother'];
$pantalla = $_POST['codpantalla'];
$dd = $_POST['coddd'];
$ram = $_POST['codram'];
$wlan = $_POST['codwlan'];
$red = $_POST['codred'];
$bateria = $_POST['bateria'];
$cargador = $_POST['cargador'];

if(empty($_POST['codteclado'])){
	$teclado = "nada";
}
if(empty($_POST['codmother'])){
	$mother = 'nada';
}
if(empty($_POST['codpantalla'])){
	$pantalla = 'nada';
}
if(empty($_POST['coddd'])){
	$dd = "nada";
}
if(empty($_POST['codram'])){
	$ram = 'nada';
}
if(empty($_POST['codwlan'])){
	$wlan = 'nada';
}

if(empty($_POST['codred'])){
	$red = 'nada';
}

if(empty($_POST['bateria'])){
	$bateria = 'nada';

}
if(empty($_POST['cargador'])){
	$cargador = 'nada';
}

define('CHARSET','ISO-8859-1');


$objResponse = new stdClass();

include("../conect/conexion.php");
$cn = Conectarse();



$sql = "INSERT INTO ct_equipos_con_rep(
no_serie,
teclado_cod,
motherboard_cod,
pantalla_cod,
discoduro_cod,
memoriaram_cod,
wlan_cod,
redboard_cod,
bateria_cod,
cargador_cod,
fecha_captura) 
VALUES(
'".$serie."',
'".$teclado."',
'".$mother."',
'".$pantalla."',
'".$dd."',
'".$ram."',
'".$wlan."',
'".$red."',
'".$bateria."',
'".$cargador."',
NOW());";

$ejecutar = mysql_query($sql,$cn) or die(mysql_error());

 if(!$ejecutar){

 	$objResponse->Registrado = 0;

 }else{

 	$objResponse->Registrado = 1;
 }

 
 echo json_encode($objResponse);
?>