<?PHP 
include("../conexion.php");
$cn = Conectarse();

$clavecct = $_GET['clavecct'];

$select = "SELECT * FROM ct_conectividad WHERE Clave like '%".$clavecct."%' ORDER BY id_conect DESC ";
$result = mysql_query($select,$cn);


if(!$result){

	die(mysql_error());

}else{
	$arreglo["data"] = []; 
	while( $data = mysql_fetch_assoc($result)){

		$arreglo["data"][] = $data;

	}
	echo json_encode($arreglo);
}
mysql_free_result($result);
mysql_close($cn);

?>