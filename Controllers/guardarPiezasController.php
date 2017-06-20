<?PHP 

include("../conect/conexion.php");

$id = $_POST["id"];
$noserie = $_POST["serie"];
$codteclado = $_POST["teclado"];
$codmother = $_POST["mother"];
$codpantalla = $_POST["pantalla"];
$coddisco = $_POST["dd"];
$codmemoria = $_POST["ram"];
$codwlan = $_POST["wlan"];
$codredenc = $_POST["red"];
$codbateria = $_POST["bateria"];
$codcargador = $_POST["cargador"];
$opcion = $_POST['opcion'];
$informacion = [];

switch ($opcion) {
	case 'modificar':
		# code...
		modificar($id,$noserie,$codteclado,$codmother,$codpantalla,$coddisco,$codmemoria,$codwlan,$codredenc,$codbateria,$codcargador);
		break;
	
	case 'eliminar':

		# code...
		break;
}

function modificar($id,$noserie,$codteclado,$codmother,$codpantalla,$coddisco,$codmemoria,$codwlan,$codredenc,$codbateria,$codcargador){

	$cn = Conectarse();
	$query = "UPDATE ct_piezas_eq SET teclado_cod = '".$codteclado."',motherboard_cod = '".$codmother."',pantalla_cod = '".$codpantalla."',
                                      discoduro_cod = '".$coddisco."',memoriaram_cod = '".$codmemoria."',wlan_cod = '".$codwlan."',
                                      redboard_cod = '".$codredenc."',bateria_cod = '".$codbateria."',cargador_cod = '".$codcargador."'
                                      WHERE Id = '".$id."';";


   $resultado = mysql_query($query , $cn) or die(mysql_error());  

   if(!$resultado){
   	$informacion["respuesta"] = "ERROR";

   }else {
   	$informacion["respuesta"] = "BIEN";
   }
   echo json_encode($informacion);
   mysql_close($cn);
}

?>