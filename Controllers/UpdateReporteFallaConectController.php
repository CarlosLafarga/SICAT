<?php
	
	include("../conect/conexion2.php");

	function update($folio,$reportprovee){

		$cn = Conectarse();

		if(!empty($folio) AND !empty($reportprovee)){ /*if para que no ejecute si estos campos estan vacios*/
		   
		   $consulta = "UPDATE reportes_conect SET NumReporte = '".$reportprovee."', status = 1,fecha_seguimiento = NOW() WHERE id ='".$folio."' ";
		   
		   $ejecutar = mysql_query($consulta,$cn) or die(mysql_error());

		   if(!$ejecutar){

		   		/*si algo fallo mandara un aviso para verificar por que el error*/
		   		echo "<script>
                        swal({
                        title: 'Algo Anda Mal!',
                        text:  'Error al actualizar reporte',
                        type:  'warning',
                        showCancelButton: false,
                        confirmButtonColor: '#ff0000',
                        confirmButtonText: 'Aceptar',
                        closeOnConfirm: true
                        },
                        function(){
                        window.location.href='../conectividad/reporteFalla.php';
                        });
                      </script>"; 

		   }else{

		   		/*si se actualizo sin problemas mandara un aviso para confirmar el update */
		   		echo "<script>
                         swal({
                         title: 'Buen Trabajo!',
                         text:  'Reporte actualizado con exito!',
                         type:  'success',
                         showCancelButton: false,
                         confirmButtonColor: '#ff0000',
                         confirmButtonText: 'Aceptar',
                         closeOnConfirm: true
                         },
                         function(){
                         window.location.href='../conectividad/reporteSeguimientoFalla.php';
                         });
                     </script> ";
		   }	

	   } else{



	   }

	}	
?>