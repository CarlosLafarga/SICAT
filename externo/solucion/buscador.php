<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/pagbasea.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Resultados de la Busqueda</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css2/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome2/css/font-awesome.css" rel="stylesheet">
    <!-- Morris -->
    <link href="../css2/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js2/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css2/animate.css" rel="stylesheet">
    <link href="../css2/style.css" rel="stylesheet">
<!-- Data Tables -->
    <link href="../css2/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../css2/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../css2/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

<!--SCRIP INSPINIA-->
	<script src="../js2/jquery-2.1.1.js"></script>
    <script src="../js2/bootstrap.min.js"></script>
    <script src="../js2/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js2/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../js2/plugins/flot/jquery.flot.js"></script>
    <script src="../js2/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js2/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../js2/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js2/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="../js2/plugins/peity/jquery.peity.min.js"></script>
    <script src="../js2/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js2/inspinia.js"></script>
    <script src="../js2/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js2/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../js2/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- EayPIE -->
    <script src="../js2/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../js2/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../js2/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../js2/plugins/chartJs/Chart.min.js"></script>
  
<!--TEMRINA js INSPINIA-->
	


     <script type="text/javascript" src="../calendario/calendar.js"></script>
     <script type="text/javascript" src="../calendario/idioma/calendar-es.js"></script>
     <script type="text/javascript" src="../calendario/calendar-setup.js"></script>

	 <script type="text/javascript" src="../js/jquery-1.4.1.min.js"></script>
	 <script type="text/javascript" src="../js/ui/ui.core.js"></script>
	 <script type="text/javascript" src="../js/ui/ui.datepicker.js"></script>
   <script type="text/javascript" src="../js/thickbox.js"></script>   
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript"> 
window.resizeTo(850,600);
function valor(numero,op)
{
if(op==2)numero+=30;else numero-=30;
document.form1.next.value=numero;
}
function sobre (src, color_sobre, j )  { 

if (!src.contains(event.fromElement)) { 

src.style.cursor = "hand"; 
src.bgColor = color_sobre ; 
src.text="#ff0000 "; }

}
function click2(src, color_sobre,j) { 
if (!src.contains(event.fromElement)) { 
src.style.cursor = "hand"; 
src.bgColor = color_sobre ; 
window.opener.document.bescuela.clavecct.value=j;
    window.close();
}  }
function fuera (src, color_fuera,j ) { 
if (!src.contains(event.toElement)) { 

src.style.cursor = "hand"; 
src.bgColor = color_fuera ; 
} 
} 
</script>  
<!-- InstanceEndEditable -->
</head>
<body>

<? 
$log=0; $pinicial=0;

 
  include "conexion.php";
	if ($pinicial == 1){
		$result=mysql_query("SELECT * from briusers where usuario = '$usuario' AND password = '$pwd'",$link);
	}
	if ($pinicial == 0){
		$result=mysql_query("SELECT * from briusers where id_usuario = '$id_usuario'",$link);
	}
	
	


?>

<!-- InstanceBeginEditable name="EditRegion1" -->
	<!--Javascripts-->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion2" -->

	
		
		
	<? 
		//echo ('Cuanto vale '.$id_usuario);
	  include "conexion2.php";
	  $num=0; $sql2=" "; $sql4=" "; $band=0; $nummun="%";
	  foreach($_POST as $var => $value)
	  {
 		if($var=="clave") {$clave=strtoupper($value); $sql2=$sql2."AND clavecct LIKE '%$clave%' ";echo "$var = $value <br>";}
  		else if($var=="nombre" ) {$nombre=strtoupper($value);$sql2=$sql2."AND nombrect LIKE '%$nombre%' ";echo "$var = $value <br>";}
   		else if($var=="domicilio" ) {$domicilio=strtoupper($value); $sql2=$sql2."AND domicilio LIKE '%$domicilio%' ";echo "$var = $value <br>";}
   		else if($var=="municipio" ) {$municipio=strtoupper($value);  $sql2=$sql2."AND nombremun LIKE '%$municipio%' ";echo "$var = $value <br>";}
   		else if($var=="localidad") {$localidad=strtoupper($value);$sql2=$sql2."AND nombreloc LIKE '%$localidad%' ";echo "$var = $value <br>";}
   		else if($var=="codpost" ){ $codpost=strtoupper($value); $sql2=$sql2."AND codpost LIKE '%$codpost%' ";echo "$var = $value <br>";}
   		else if($var=="telefono" ) {$telefono=strtoupper($value); $sql2=$sql2."AND telefono LIKE '%$telefono%' ";echo "$var = $value <br>";}
   		else if($var=="director") {$director=strtoupper($value); $sql2=$sql2."AND director LIKE '%$director%' ";echo "$var = $value <br>";}
   		else if($var=="aula") {$aula=$value; 
   		if($aula == 1){
   			$sql2=$sql2."AND re = 1 ";echo "$var = $value <br>";
		}
   		if($aula == 0){
  			$sql2=$sql2."AND re <> 1 ";echo "$var = $value <br>";
		}
	   }
   }
	if($band==0)
	$sql="SELECT * FROM ct where localidad >= 0  ".$sql2." 
			and (clavecct like '26epr%' or clavecct like '26dpr%'	
			OR clavecct LIKE '26DPB%' OR clavecct LIKE '26DAI%'
            or clavecct like '26des%' or clavecct like '26ees%' or clavecct like '26dst%' 
            or clavecct like '26est%' or clavecct like '26dsn%' or clavecct like '26esn%' 
            or clavecct like'26fue%' or clavecct like '26etv%' or clavecct like '26EML%' 
            or clavecct like '26DML%' or clavecct like '26dai%' or clavecct LIKE '26ECE%' 
            or clavecct LIKE '26Enf%' or clavecct LIKE '26dnp%' 
            or clavecct LIKE '26enp%' or clavecct like '26CTM%' or clavecct like '26ETV%')";
	$result = mysql_query($sql, $link); 
	if (!$result) {
   		die('Invalid query: ' . mysql_error());	
	}//echo $sql;
	$tot=mysql_query($sql,$link);
	$total=mysql_num_rows($tot);
?>
     		      <div class="wrapper">
               <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
               <div class="col-lg-12">
               <div class="ibox float-e-margins">
               <div class="ibox-title">
               <h5>Resultados de la Busqueda</h5>
               <div class="ibox-tools">
               <small>Se encontraron <? echo $total ?> registros</small>
               </div>
               </div>
	           <div class="ibox-content">
               
               <form method="POST" action="" name="form1">
               <table class="table table-striped table-bordered table-hover dataTables-example">
               <thead>
               <? $j=0;?>
		      
		      <tr>
			  <th>No</th>
			  <th>Clave</th>
			  <th>Nombre del C.T.</th>
			  <th>Domicilio</th>
			  <th>Localidad</th>
			  <th>Municipio</th>
			  <th>Estatus</th>
			  </tr>
			  </thead>
        <tbody>
			  <?php
			    while ($row = mysql_fetch_array($result))  {
				$j++;
				$clave=$row["clavecct"];
				$titulo=$row["nombrect"];
				?>

				
				<? echo "<tr onmouseover=\"sobre (this,'','$clave')\" onmouseout=\"fuera (this,'','$clave') \" onClick=\"click2 (this,'','$clave') \">";?>
				<td><?echo "".$j."";?></td>
				<td><?echo "".$row["clavecct"]."";?></td> 
				<td><?echo "".$row["nombrect"]."";?></td>
				<td><?echo "".$row["domicilio"]."";?></td> 
				<td><?echo "".$row["nombreloc"]."";?></td> 
				<td><?echo "".$row["nombremun"]."";?></td>

				<?
				if ($row["re"] == 1){
					echo "<td>".'Cuenta A. M.'."</B> </td>";}
				if ($row["re"] == 2){
					echo "<td >".'Escuela Cerrada'."</td>";}
				if (($row["re"] <> 1) && ($row["re"] <> 2)){
					echo "<td >".'No Cuenta A. M.'."</td>";}
				?>

				</tr>
				
				<?
		        };
                ?>
                </tbody>
              </table>
        
          <input type="hidden" name="sql" value="<? echo $sql ?>"/>
  		    <input type="hidden" name="next" value= "<? echo $num ?>"/>
        <? if($num>=30){	
		
		}
		echo "<input type='button' onclick='history.back()' value='Nueva Busqueda' class='btn btn-w-m btn-success'>"; 
		if($num<$total-30){//$num=$num+30; 
		
				
		}
        
				?>
               </form>
               </div>
               </div>
               </div>
               </div>
               </div>
               </div>

                   
<!-- InstanceEndEditable -->
    <script src="../js2/jquery-2.1.1.js"></script>
    <script src="../js2/bootstrap.min.js"></script>
    <script src="../js2/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js2/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="../js2/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../js2/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../js2/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../js2/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js2/inspinia.js"></script>
    <script src="../js2/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js2/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );

            var actual= new Date(); 
	    var dia= actual.getDate();
	    var mes= actual.getMonth() + 1;
	    var anyo= actual.getUTCFullYear();
	    if(dia < 10){dia = "0"+dia;}
	    if(mes < 10){mes = "0"+mes;}
	    var fecha= anyo+'-'+mes+'-'+dia;
	    if($(".hoy").val() == ""){
	    	$(".hoy").val(fecha);
	   	}
	   	//- CAMPO VISITO (NOMBRE DE BRIGADISTAS) -- 
		$("#brigadistas").change(function(){
			var coma = "";
			var vis = $("#visita").val();
			if($("#visita").val() == ""){
				coma = "";
			}else{
				coma = ", ";
			}
			$("#visita").val(vis + coma + $(this).val());
		});


        });

        
	
        
    </script>
</body>
<!-- InstanceEnd -->
</html>
