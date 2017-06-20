<?PHP 
include("../conexion.php");
$cn = Conectarse();

$select = "SELECT * FROM ct_piezas_eq  ORDER BY no_serie DESC ";
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