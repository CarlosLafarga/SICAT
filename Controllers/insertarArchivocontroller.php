<?php
	 
	  include ("../conect/conexion.php");
	  function uploadArch($Arch, $serie,$id){

	 	$cn = Conectarse();
	 	$ruta = $_SERVER['DOCUMENT_ROOT'].'/sicat/Archivos/'.$Arch['archivo']['name'];
	 	move_uploaded_file($Arch['archivo']['tmp_name'], $ruta);

	 	$sql = "UPDATE ct_equipos_rep SET archivo_des = '/sicat/Archivos/".$Arch['archivo']['name']."' WHERE id = '".$id."' ;";
	 	$ejecutar = mysql_query ($sql,$cn) or die ( mysql_error());

	 	if(!$ejecutar){

	 		
	     echo "<script>
              swal({
              title: 'Algo Anda Mal!',
              text:  'Error al subir Archivo',
              type:  'warning',
              showCancelButton: false,
              confirmButtonColor: '#ff0000',
              confirmButtonText: 'Aceptar',
              closeOnConfirm: true
              },
              function(){
              window.location.href='../reportes_equipos/adminequipo.php';
              });
              </script> ";

	 	}else{

	 	echo "<script>
              swal({
              title: 'Buen Trabajo!',
              text:  'Archivo se subio con exito!',
              type:  'success',
              showCancelButton: false,
              confirmButtonColor: '#ff0000',
              confirmButtonText: 'Aceptar',
              closeOnConfirm: true
              },
              function(){
              window.location.href='../reportes_equipos/adminequipo.php';
              });
              </script> ";
	 		
	 	}
	 }


	  function uploadCodi($codigo,$serie,$id){

	 	$cn = Conectarse();
	 	$sql = "UPDATE ct_equipos_rep SET codigo_des = '".$codigo."' WHERE id = '".$id."' ;";
	 	$ejecutar = mysql_query ($sql,$cn) or die ( mysql_error());

	 	if(!$ejecutar){

	 		
	     echo "<script>
              swal({
              title: 'Algo Anda Mal!',
              text:  'Error alinsertar codigo',
              type:  'warning',
              showCancelButton: false,
              confirmButtonColor: '#ff0000',
              confirmButtonText: 'Aceptar',
              closeOnConfirm: true
              },
              function(){
              window.location.href='../reportes_equipos/adminequipo.php';
              });
              </script> ";

	 	}else{

	 	echo "<script>
              swal({
              title: 'Buen Trabajo!',
              text:  'Codigo actualizado con exito!',
              type:  'success',
              showCancelButton: false,
              confirmButtonColor: '#ff0000',
              confirmButtonText: 'Aceptar',
              closeOnConfirm: true
              },
              function(){
              window.location.href='../reportes_equipos/adminequipo.php';
              });
              </script> ";
	 		
	 	}
	 }

?>