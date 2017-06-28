<?PHP
	include("conexion.php");

	function consultarct($clavecct){

		$cn=  Conectarse();
            if(empty($clavecct)){

                  echo '<script>
                   swal({
                   title: "Algo Anda Mal!",
                   text: "Campo Clavecct Esta Vacio",
                   type: "warning",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href="index.php";
                   });
                   </script> ';

            }else{

		$consultar = "SELECT * FROM ct_escuelas WHERE clavecct LIKE '%$clavecct%' ";
		$ejecutar = mysql_query($consultar,$cn) or die(mysql_error());
		 

		if(mysql_num_rows($ejecutar) > 0 ){

			 echo '<script>
                   swal({
                   title: "Buen Trabajo!",
                   text: "Clave encontrada en mi base de datos.",
                   type: "success",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href="tipo_report.php?clavecct='.$clavecct.'";
                   });
                   </script> ';

		}elseif(mysql_num_rows($ejecutar) <= 0 ){

			 echo '<script>
                   swal({
                   title: "Algo Anda Mal!",
                   text: "Escuela No Existe",
                   type: "warning",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href="";
                   });
                   </script> ';

		}

	}
   }


	function datosescolares($clavecct){
			
		$cn = Conectarse();
	      $consulta = "SELECT * FROM ct_escuelas 
            LEFT JOIN ct_alumnos ON ct_escuelas.clavecct = ct_alumnos.clavecct 
            LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct
            LEFT JOIN ct_equipos ON ct_escuelas.clavecct = ct_equipos.clavecct
            WHERE ct_escuelas.clavecct LIKE  '%$clavecct%';";

            $ejecutar = mysql_query($consulta,$cn);
            $row_esc =  mysql_fetch_array($ejecutar);
            ?>

            <div class="row show-grid">
            <div class="col-md-4">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>Clavecct:</strong><br>
            <span><?php  if($row_esc['clavecct']!='')  {echo $row_esc['clavecct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>NombreCT:</strong><br>
            <span><?php  if($row_esc['nombrect'] !=''){echo $row_esc['nombrect']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

             <div class="col-md-4">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Domicilio:</strong><br>
            <span><?php  if($row_esc['dom_cct']!=''){echo $row_esc['dom_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-4">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Municipio:</strong><br>
            <span><?php  if($row_esc['municipio'] !=''){echo $row_esc['municipio']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Localidad:</strong><br>
            <span><?php  if($row_esc['localidad']!=''){echo $row_esc['localidad']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
           
            <div class="col-md-4">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono:</strong><br>
            <span><?php  if($row_esc['tel_cct']!=''){echo $row_esc['tel_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular:</strong><br>
            <span><?php  if($row_esc['cel_ct']!=''){echo $row_esc['cel_ct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-user"></i>&nbsp;
            <strong>Nombre Director:</strong><br>
            <span><?php  if($row_esc['nom_dir']!=''){echo $row_esc['nom_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono Director:</strong><br>
            <span><?php if($row_esc['tel_dir'] != '' ) {echo $row_esc['tel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-4">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular Director:</strong><br>
            <span><?php  if($row_esc['cel_dir']!=''){echo $row_esc['cel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-4">
            <i class="fa fa-male"></i>&nbsp;
            <strong>Total Alumnos:</strong><br>
            <span><?php  if($row_esc['total_alumnos']!=''){echo $row_esc['total_alumnos']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            </div>

            <?php
	}

?>