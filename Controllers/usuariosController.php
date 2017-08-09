<?php


function listar(){
   
   $cn =  Conectarse();
   $consulta = "SELECT * FROM ct_users";
   $ejecutar =  mysql_query($consulta,$cn) or die (mysql_error());
   $i = 0;
   while($row = mysql_fetch_array($ejecutar)){
   		$i++;

	    echo "<tr>";
	    echo "<td>".$i."</td>";
	    echo "<td>".$row['usuario']."</td>";
	    echo "<td>".$row['nombre']."</td>";
	    echo "<td>".$row['correo']."</td>";
	    echo "<td>".$row['tel']."</td>";
	    echo "<td>".$row['cel']."</td>";
	    echo "<td>
	    <center>
	    <button class='btn btn-success btn-circle' type='button'><i class='fa fa-edit'></i></button>|
	    <button class='btn btn-primary btn-circle' type='button'><i class='fa fa-times'></i></button>
	    </center>
	    </td>";
	    echo "</tr>";
   }

}

function insertar($nombre_user,$pass,$name_complete,$correo,$telefono,$celular,$puesto){


	$cn = Conectarse();
	$consulta = "INSERT INTO ct_users (usuario,pswd,pswd2,nombre,correo,tel,cel,permisos) 
	             VALUES('".$nombre_user."','".sha1($pass)."','".$pass."','".$name_complete."','".$correo."','".$telefono."','".$celular."','".$puesto."');";
	$ejecutar = mysql_query($consulta,$cn) or die(mysql_error());
	if(!$ejecutar){

		 echo '<script>
		       swal({
               title: "ALGO SALIO MAL",
               text: "DATOS NO GUARDADOS",
               type: "danger",
               showCancelButton: false,
               confirmButtonColor: "#ff0000",
               confirmButtonText: "Aceptar",
               closeOnConfirm: true
               },
               function(){
               //location.reload();  
               });
               </script>';

	}else{
		 
		 echo '
		       <script>
		       swal({
               title: "BUEN TRABAJO!",
               text: "DATOS GUARDADOS CON EXITO",
               type: "success",
               showCancelButton: false,
               confirmButtonColor: "#ff0000",
               confirmButtonText: "Aceptar",
               closeOnConfirm: true
               },
               function(){
               //location.reload();  
               });
               </script>';
	}

}

function editar($id){

}

function eliminar($id){

}

?>