<?php


include("../conexion.php");
if(isset($_POST["serie"]))
{

	$equipo =  $_POST['equipo'];
	$serie  =  $_POST['serie'];

	if($equipo == 'LAPTOP_MX'){

	    $cn =  Conectarse();
	    $LAPTOP = "SELECT * FROM entregadas WHERE BAR_LAP = '".$serie."'";
	    $ejecutar_lap = mysql_query($LAPTOP,$cn) or die(mysql_error());
	    $row = mysql_fetch_array($ejecutar_lap);

	    echo json_encode(array
	    	            ( "clave" => "".$row['CCT']."",
	    	              "escu"  => "".$row['NOMBRECT']."",
	    	              "loc"   => "".$row['NOMBRELOC']."",
	    	              "mun"   => "".$row['NOMBREMUN']."",
	    	              "nino"  => "".$row['NOMBRE']." ".$row['PATERNO']." ".$row['MATERNO']."",
	    	              "curp"  => "".$row['CURP'].""));

	}elseif($equipo == 'TABLET') {
		
	   $cn =  Conectarse();
	   $TABLET = "SELECT * FROM tablets WHERE tbl_serie = '".$serie."'";
	   $ejecutar_tab = mysql_query($TABLET,$cn) or die(mysql_error());
	   $row1 = mysql_fetch_array($ejecutar_tab);
	   
	   echo json_encode(array
	   	               (  "clave"  => "".$row1['esc_cct']."",
	   	                  "escu"   => "",
	   	                  "loc"    => "".$row1['loc_localidad']."",
	   	                  "mun"    => "".$row1['mun_municipio']."",
	   	                  "nino"   => "".$row1['bnf_nombre']." ".$row1['bnf_apellido1']." ".$row1['bnf_apellido2']."",
	   	                  "curp"   => "".$row1['bnf_curp'].""));

	}
	
	

}else{

	echo json_encode(array("clave"=>"", "escu"=>"", "loc"=>"","mun"=>"","nino"=>"","curp"=>""));
}
?>
