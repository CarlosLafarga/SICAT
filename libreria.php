    <?php

       require_once('conexion.php');
    
      function validarUsuario($usuario, $password){
      $cn=  Conectarse();
      $consulta = "select * from ct_users where usuario = '".$usuario."' AND pswd = '".$password."';";

      $result = mysql_query($consulta,$cn) or die (mysql_error());
      
      if(mysql_num_rows($result) > 0 ){

         return true;            

        } else  {   

         return false;
         
       }
   
       }



     function consultarEsc($clavecct){
      
            $cn=  Conectarse();
            $query  = "SELECT * FROM ct_escuelas 
            LEFT JOIN ct_alumnos ON ct_escuelas.clavecct = ct_alumnos.clavecct 
            LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct
            LEFT JOIN ct_equipos ON ct_escuelas.clavecct = ct_equipos.clavecct
            WHERE ct_escuelas.clavecct LIKE '%$clavecct%' ORDER BY ct_escuelas.clavecct;";

            $ejecutar = mysql_query($query,$cn);
            $registro=mysql_num_rows($ejecutar);
            
            /*Si la consulta que le hacemos a la bd encuentra una coincidencia llamamos el desplique de escuelas con la clave*/    
            if($registro == 1){

            despliegaEsc($clavecct);

            }elseif($registro > 1){?>

            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Centros de trabajo</h5>
            <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
            </ul>
            <a class="close-link">
            <i class="fa fa-times"></i>
            </a>
            </div>
            </div>
            <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Clavecct</th>
                        <th>Nombre ct</th>
                        <th>Turno</th>
                        <th>Domicilio</th>
                        <th>Vespertino</th>
                        <th>Status ct</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        <th>Total Alumnos</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                     $i=0;
                     while($row_esc=mysql_fetch_array($ejecutar))
                     {
                     $i++;      
                     echo "<tr>";
                     echo "<td>".$i."</td>";
                     echo "<td>".$row_esc["clavecct"]."</td>";
                     echo "<td>".$row_esc["nombrect"]."</td>";  
                     echo "<td>".$row_esc["tur_des"]."</td>";
                     echo "<td>".$row_esc["dom_cct"]."</td>";
                     echo "<td>".$row_esc["vespertino"]."</td>";
                     echo "<td>".$row_esc["status"]."</td>";
                     echo "<td>".$row_esc["municipio"]."</td>";
                     echo "<td>".$row_esc["localidad"]."</td>";
                     echo "<td>".$row_esc["total_alumnos"]."</td>";
                     echo "</tr> ";
      
                     };
                     ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Clavecct</th>
                        <th>Nombre ct</th>
                        <th>Turno</th>
                        <th>Domicilio</th>
                        <th>Vespertino</th>
                        <th>Status ct</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        <th>Total Alumnos</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
            </div>
            </div>
            </div>
            </div> 
                
           <?php }
            elseif($registro == 0){
           ?>
             <script>
              swal({
              title: "Algo Anda Mal!",
              text: "Escuela No Existe",
              type: "info",
              showCancelButton: false,
              confirmButtonColor: "#ff0000",
              confirmButtonText: "Aceptar",
              closeOnConfirm: true
              },
              function(){
              window.location.href='';
              });
              </script> 
         
           <?php
            }

            }


           function despliegaEsc($clavecct){

              $cn=  Conectarse();
              $consulta_esc=mysql_query("select * from ct_escuelas where clavecct like '%$clavecct%'",$cn);
              $row_esc=mysql_fetch_array($consulta_esc);
              $status_esc=$row_esc['re'];
              if ($status_esc == 1){
              include("include/amedios.php");
              amedios($clavecct,$status_esc);
              }

              if ($status_esc == 2){
              include("include/amedios.php");
              amedios($clavecct,$status_esc);
              }

              if ($status_esc == 0){
              include("include/amedios.php");
              amedios($clavecct,$status_esc);
              }

              }

              function crearfolio(){
              $cn=Conectarse();
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
            
              function insertar_equipo_rep($no_serie,$clavecct,$nombre_escuela,$nombre_loc,$nombre_mun,$curp,$nombre_nino,$boot_tik,$hardware_id,$provisional_num,$diagnostico_eq,$nombrecon_sol,$tel_cel,$correo,$status,$capturo,$tipo_equipo){

                $cn=  Conectarse();
                $folio = crearfolio();
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
                '".$no_serie."',
                '".$clavecct."',
                '".$nombre_escuela."',
                '".$nombre_loc."',
                '".$nombre_mun."',
                '".$curp."',
                '".$nombre_nino."',
                '".$boot_tik."',
                '".$hardware_id."',
                '".$provisional_num."',
                '".$diagnostico_eq."',
                '".$nombrecon_sol."',
                '".$tel_cel."',
                '".$correo."',
                '".$status."',
                '".$capturo."',
                NOW(),
                '".$tipo_equipo."');";

                $ejecutar = mysql_query($sql,$cn) or die(mysql_error());
                if(!$ejecutar){
                  ?>
                   <script>
                   swal({
                   title: "Algo Anda Mal!",
                   text: "No se inserto algo anda mal ",
                   type: "warning",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href='';
                   });
                   </script> 
                  <?PHP

                  }else{
                  ?>
                   <script>
                   swal({
                   title: "Buen trabajo!",
                   text: "Equipo agregado con exito",
                   type: "success",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href='';
                   });
                   </script> 
                  <?PHP
                }
               }

            function verEquipo(){

            $cn=  Conectarse();
            $query  = "SELECT * FROM ct_equipos_rep WHERE status = 'En cola' AND cancelada = 0 AND exportar = 0";

            $ejecutar = mysql_query($query,$cn);
            $registro=mysql_num_rows($ejecutar);
            ?>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Equipos Capturado</h5>
            <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
            </ul>
            <a class="close-link">
            <i class="fa fa-times"></i>
            </a>
            </div>
            </div>
            <div class="ibox-content">
            <form method="POST" name="table">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Seleccionar</th>
                        <th>Folio</th>
                        <th>No serie</th>
                        <th>Nombre Ni&ntilde;@</th>
                        <th>Curp</th>
                        <th>Clavecct</th>
                        <th>Nombre Escuela</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                        <th>Boot tik</th>
                        <th>Hardware id</th>
                        <th>Provisional number</th>
                        <th>Diagnostico</th>
                        <th>Nombre Solicitante</th>
                        <th>Telefono Solicitante</th>
                        <th>Correo Solicitante</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                     $i=0;
                     while($row_esc=mysql_fetch_array($ejecutar))
                     {
                     $i++;      
                     echo "<tr>";
                     echo "<td>".$i."</td>";
                     echo "<td><input type='checkbox' class='i-checks' name='modificar[]' value='".$row_esc['id']."' ></td>";
                     echo "<td>".$row_esc["id"]."</td>";
                     echo "<td>".$row_esc["no_serie"]."</td>";  
                     echo "<td>".$row_esc["nombre_nino"]."</td>";
                     echo "<td>".$row_esc["curp"]."</td>";
                     echo "<td>".$row_esc["clavecct"]."</td>";
                     echo "<td>".$row_esc["nombre_escuela"]."</td>";
                     echo "<td>".$row_esc["nombre_loc"]."</td>";
                     echo "<td>".$row_esc["nombre_mun"]."</td>";
                     echo "<td>".$row_esc["boot_tik"]."</td>";
                     echo "<td>".$row_esc["hardware_id"]."</td>";
                     echo "<td>".$row_esc["provisional_num"]."</td>";
                     echo "<td>".$row_esc["diagnostico_eq"]."</td>";
                     echo "<td>".$row_esc["nombrecon_sol"]."</td>";
                     echo "<td>".$row_esc["tel_cel"]."</td>";
                     echo "<td>".$row_esc["correo"]."</td>";
                     echo "</tr> ";
      
                     };
                     ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Seleccionar</th>
                        <th>Folio</th>
                        <th>No serie</th>
                        <th>Nombre Ni&ntilde;@</th>
                        <th>Curp</th>
                        <th>Clavecct</th>
                        <th>Nombre Escuela</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                        <th>Boot tik</th>
                        <th>Hardware id</th>
                        <th>Provisional number</th>
                        <th>Diagnostico</th>
                        <th>Nombre Solicitante</th>
                        <th>Telefono Solicitante</th>
                        <th>Correo Solicitante</th>
                    </tr>
                    </tfoot>

                    </table>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary " name="exportar" value="Reportar" >
                    </div>
                    </form>
                    <?PHP
                    if(isset($_POST['exportar'])){

                      if(empty($_POST['modificar'])){

                         echo '<script>
                              sweetAlert("Oops...", "No a seleccionado ningun registro.", "error");
                              </script>';
                      }else{

                          foreach ($_POST['modificar'] as $id_reporte) {

                            $update  = "UPDATE ct_equipos_rep SET status = 'reportado', exportar = 1 WHERE id = '".$id_reporte."' ";
                            $ejecutar = mysql_query($update,$cn);

                            if(!$ejecutar){
                              
                              echo '
                              <script>
                              swal({
                              title: "Algo Anda Mal!",
                              text: "Elemento no pudo exportarse.",
                              type: "warning",
                              showCancelButton: false,
                              confirmButtonColor: "#ff0000",
                              confirmButtonText: "Aceptar",
                              closeOnConfirm: true
                              },
                              function(){
                              window.location.href="";
                              });
                              </script> 
                              ';
                              

                              }
                              else
                              {

                              echo '
                              <script>
                              swal({
                              title: "Buen Trabajo!",
                              text: "Elementos Exportados correctamente",
                              type: "success",
                              showCancelButton: false,
                              confirmButtonColor: "#ff0000",
                              confirmButtonText: "Aceptar",
                              closeOnConfirm: true
                              },
                              function(){
                              window.location.href="";
                              });
                              </script> 
                              ';


                            }
                            
                            
                          }

                      }
                    }
                    ?>
            </div>
            </div>
            </div>
            </div> 
<?php
           }
           

           function reportados(){

            $cn=  Conectarse();
            $query1  = "SELECT * FROM ct_equipos_rep WHERE status = 'reportado' AND cancelada = 0 AND  exportar = 1 ";

            $ejecutar1 = mysql_query($query1,$cn);
            $registro=mysql_num_rows($ejecutar1);
            ?>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Equipos Reprotado</h5>
            <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
            </ul>
            <a class="close-link">
            <i class="fa fa-times"></i>
            </a>
            </div>
            </div>
            <div class="ibox-content">
            <form method="POST" name="table" action="exportar.php">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Folio</th>
                        <th>No serie</th>
                        <th>Nombre Ni&ntilde;@</th>
                        <th>Curp</th>
                        <th>Clavecct</th>
                        <th>Nombre Escuela</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                        <th>Boot tik</th>
                        <th>Hardware id</th>
                        <th>Provisional number</th>
                        <th>Diagnostico</th>
                        <th>Nombre Solicitante</th>
                        <th>Telefono Solicitante</th>
                        <th>Correo Solicitante</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                     $i=0;
                     while($row_esc=mysql_fetch_array($ejecutar1))
                     {
                     $i++;      
                     echo "<tr>";
                     echo "<td>".$i."</td>";
                     echo "<td>".$row_esc["id"]."</td>";
                     echo "<td>".$row_esc["no_serie"]."</td>";  
                     echo "<td>".$row_esc["nombre_nino"]."</td>";
                     echo "<td>".$row_esc["curp"]."</td>";
                     echo "<td>".$row_esc["clavecct"]."</td>";
                     echo "<td>".$row_esc["nombre_escuela"]."</td>";
                     echo "<td>".$row_esc["nombre_loc"]."</td>";
                     echo "<td>".$row_esc["nombre_mun"]."</td>";
                     echo "<td>".$row_esc["boot_tik"]."</td>";
                     echo "<td>".$row_esc["hardware_id"]."</td>";
                     echo "<td>".$row_esc["provisional_num"]."</td>";
                     echo "<td>".$row_esc["diagnostico_eq"]."</td>";
                     echo "<td>".$row_esc["nombrecon_sol"]."</td>";
                     echo "<td>".$row_esc["tel_cel"]."</td>";
                     echo "<td>".$row_esc["correo"]."</td>";
                     echo "</tr> ";
      
                     };
                     ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Folio</th>
                        <th>No serie</th>
                        <th>Nombre Ni&ntilde;@</th>
                        <th>Curp</th>
                        <th>Clavecct</th>
                        <th>Nombre Escuela</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                        <th>Boot tik</th>
                        <th>Hardware id</th>
                        <th>Provisional number</th>
                        <th>Diagnostico</th>
                        <th>Nombre Solicitante</th>
                        <th>Telefono Solicitante</th>
                        <th>Correo Solicitante</th>
                    </tr>
                    </tfoot>

                    </table>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary " onClick="window.location.reload()" name="exportar" value="Exportar" >
                    </div>
                    </form>
                    
            </div>
            </div>
            </div>
            </div> 
<?PHP
           }

          
    ?>
