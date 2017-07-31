<?php


function listar(){
   
   $conect =  Conectarse();
   $consulta = "SELECT * FROM ct_users";
   $ejecutar =  mysql_query($consulta,$conect) or die (mysql_error());
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

function insertar(){

}

function editar($id){

}

function eliminar($id){

}

?>