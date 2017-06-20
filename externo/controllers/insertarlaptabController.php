<?PHP 
include("../conexion.php");

 function crearfolio(){
 $cn = Conectarse();
 $consulta_rpt=mysql_query("select * from ct_equipos_rep order by id desc",$cn);
 $row_rpt=mysql_fetch_array($consulta_rpt);
 $anioact=date('y');
 $ultfolio=$row_rpt['id'];
 @list ($prefijo, $consecutivo)= explode('-',$ultfolio);
 if ($anioact == $prefijo)
 { 
 $num=$consecutivo+1;
 $longitud=strlen($num);
 $faltan=5-$longitud;
 if ($faltan == 4){$folio=$prefijo.'-'.'0000'.$num;}
 if ($faltan == 3){$folio=$prefijo.'-'.'000'.$num;}
 if ($faltan == 2){$folio=$prefijo.'-'.'00'.$num;}
 if ($faltan == 1){$folio=$prefijo.'-'.'0'.$num;}
 if ($faltan == 0){$folio=$prefijo.'-'.$num;}
 return $folio;
 }
 else{
 $folio=$anioact.'-00001';
 return $folio;
 }
 }

 $serie = $_POST['noserie'];
 $clavecct = $_POST['clavecct'];
 $escuela = $_POST['escuela'];
 $Localidad = $_POST['Localidad'];
 $municipio = $_POST['municipio'];
 $nombre_nino = $_POST['nombre_nino'];
 $curp = $_POST['curp'];
 $boot = $_POST['boot'];
 $hardware = $_POST['hardware'];
 $provisional = $_POST['provisional'];
 

 if(empty($_POST['diagnostico'])){

 	$diagnostico = 'BLOQUEADO';
 }else{
 	$diagnostico = $_POST['diagnostico'];
 }

 $namecomplet = $_POST['namecomplet'];
 $telcel = $_POST['telcel'];
 $correo = $_POST['correo'];  
 $tipo_equipo = $_POST['tipoeq'];

define('CHARSET','ISO-8859-1');
$objResponse = new stdClass();

$cn = Conectarse();
$folio = crearfolio();
$status ="En cola";

$sql = "INSERT INTO ct_equipos_rep (
                id,
                no_serie,
                clavecct,
                nombre_escuela,
                nombre_loc,
                nombre_mun,
                curp,
                nombre_nino,
                boot_tik,
                hardware_id,
                provisional_num,
                diagnostico_eq,
                nombrecon_sol,
                tel_cel,
                correo,
                status,
                capturo,
                fecha_entrada,
                tipo_equipo) 

                VALUES (
                '".$folio."',
                '".$serie."',
                '".$clavecct."',
                '".$escuela."',
                '".$Localidad."',
                '".$municipio."',
                '".$curp."',
                '".$nombre_nino."',
                '".$boot."',
                '".$hardware."',
                '".$provisional."',
                '".$diagnostico."',
                '".$namecomplet."',
                '".$telcel."',
                '".$correo."',
                '".$status."',
                'EXTERNO',
                 NOW(),
                '".$tipo_equipo."');";


$ejecutar = mysql_query($sql,$cn) or die(mysql_error());


 if(!$ejecutar){

 	$objResponse->Registrado = 0;

 }else{

 	$objResponse->Registrado = 1;
 }

 
 echo json_encode($objResponse);
?>