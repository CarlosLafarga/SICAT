<?PHP 
include("../conexion.php");
$cn = Conectarse();

$select = "SELECT ct_escuelas.clavecct,ct_escuelas.nombrect,tur_des,localidad,municipio FROM ct_escuelas LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct ORDER BY ct_escuelas.clavecct DESC ";
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