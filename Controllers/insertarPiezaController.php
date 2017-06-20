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

define('CHARSET','ISO-8859-1');


$objResponse = new stdClass();

include("../conect/conexion.php");
$cn = Conectarse();



$sql = "INSERT INTO ct_piezas_eq (no_serie,teclado_cod,existe_teclado,motherboard_cod,existe_mother,pantalla_cod,existe_pantalla,discoduro_cod,existe_disco,memoriaram_cod,existe_ram,wlan_cod,existe_wlan,redboard_cod,existe_redboard,bateria_cod,existe_bateria,cargador_cod,existe_cargador,fecha_ingreso) VALUES(
'".$serie."',
'".$teclado."',
1,
'".$mother."',
1,
'".$pantalla."',
1,
'".$dd."',
1,
'".$ram."',
1,
'".$wlan."',
1,
'".$red."',
1,
'".$bateria."',
1,
'".$cargador."',
1,
NOW());";

$ejecutar = mysql_query($sql,$cn) or die(mysql_error());

 if(!$ejecutar){

 	$objResponse->Registrado = 0;

 }else{

 	$objResponse->Registrado = 1;
 }

 
 echo json_encode($objResponse);
?>