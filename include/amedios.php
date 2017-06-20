            
            <?PHP    
            function amedios($clavecct,$re){

            $cn=  Conectarse();
            $query  = "SELECT * FROM ct_escuelas 
            LEFT JOIN ct_alumnos ON ct_escuelas.clavecct = ct_alumnos.clavecct 
            LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct
            LEFT JOIN ct_equipos ON ct_escuelas.clavecct = ct_equipos.clavecct
            WHERE ct_escuelas.clavecct LIKE '%$clavecct%' ORDER BY ct_escuelas.clavecct;";

            $ejecutar = mysql_query($query,$cn);
            $row_esc=mysql_fetch_array($ejecutar);
            $latitud = $row_esc['latitud'];
            $longitud = $row_esc['longitud'];

            if($re == 0){

                  $mensaje = "Este centro de trabajo no ah sido equipado.";

            }elseif($re == 1) {

                  $mensaje = "Este centro cuenta con aula de medios.";

            }elseif ($re == 2) {


                  $mensaje = "Este centro de trabajo se encuentra cerrado.";
            }
            
            ?>

            <div class="wrapper wrapper-content animated fadeInRight">    
            <div class="row">
            <!--Datos Escolares-->
            <div class="col-lg-5">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Datos Escolares<small class="m-l-sm"><?php echo $mensaje; ?></small></h5>
            <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-cog"></i>
            </a>
             <ul class="dropdown-menu dropdown-user">
            <li><a href="#" id="ubicacion" data-toggle="modal" data-target="#modal_ubi"><i class="fa fa-map-marker"></i> Ubicacion </a>
            </li>
            <?php
            if($re == 1){
            ?>     
            <li><a href="#" data-toggle="modal" data-target="#modal_report"> <i class="fa fa-pencil-square-o"></i> Reporte Aula de Medios</a>
            <?php }?>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#modal_historial"><i class="fa fa-clock-o"></i> Historial de Visitas</a>
            </li>
            <li><a href="#"><i class="fa fa-print"></i> Imprimir Datos Escolares</a>
            </li>
            <li><a href="#"><i class="fa fa-pencil"></i> Actualizar Datos Escolares</a>
            </li>
            </ul>
            
            </div>
            </div>
            <div class="ibox-content">
            <div class="row show-grid">
            <div class="col-md-12">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>Clavecct:</strong><br>
            <span><?php  if($row_esc['clavecct']!='')  {echo $row_esc['clavecct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-12">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>NombreCT:</strong><br>
            <span><?php  if($row_esc['nombrect'] !=''){echo $row_esc['nombrect']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

             <div class="col-md-12">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Domicilio:</strong><br>
            <span><?php  if($row_esc['dom_cct']!=''){echo $row_esc['dom_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-6">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Municipio:</strong><br>
            <span><?php  if($row_esc['municipio'] !=''){echo $row_esc['municipio']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Localidad:</strong><br>
            <span><?php  if($row_esc['localidad']!=''){echo $row_esc['localidad']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
           
            <div class="col-md-6">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono:</strong><br>
            <span><?php  if($row_esc['tel_cct']!=''){echo $row_esc['tel_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular:</strong><br>
            <span><?php  if($row_esc['cel_ct']!=''){echo $row_esc['cel_ct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-user"></i>&nbsp;
            <strong>Nombre Director:</strong><br>
            <span><?php  if($row_esc['nom_dir']!=''){echo $row_esc['nom_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono Director:</strong><br>
            <span><?php if($row_esc['tel_dir'] != '' ) {echo $row_esc['tel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular Director:</strong><br>
            <span><?php  if($row_esc['cel_dir']!=''){echo $row_esc['cel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-6">
            <i class="fa fa-male"></i>&nbsp;
            <strong>Total Alumnos:</strong><br>
            <span><?php  if($row_esc['total_alumnos']!=''){echo $row_esc['total_alumnos']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            </div>
            </div>
            <div class="ibox-footer">
            <span class="pull-right">
            </span>                      
            </div>
            </div>
            </div>


            <!--Comparte Edificio o si tiene vespertina :D-->
            <?php 

            if($row_esc['vespertino'] != ''){
            $clavecct_vesp = $row_esc['vespertino'];
            $consulta_vesp  = "SELECT * FROM ct_escuelas 
            LEFT JOIN ct_alumnos ON ct_escuelas.clavecct = ct_alumnos.clavecct 
            LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct
            LEFT JOIN ct_equipos ON ct_escuelas.clavecct = ct_equipos.clavecct
            WHERE ct_escuelas.clavecct LIKE '%$clavecct_vesp%' ORDER BY ct_escuelas.clavecct;";

            $ejecutar2 = mysql_query($consulta_vesp,$cn);
            $row_vesp=mysql_fetch_array($ejecutar2);
            ?>
            
            <div class="col-lg-7">
            <div class="ibox collapsed">
            <div class="ibox-title">
            <h5>Comparte Edificio<small class="m-l-sm">letra pequeña</small></h5>
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
            <div class="row show-grid">
            <div class="col-md-6">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>Clavecct:</strong><br>
            <span><?php  if($row_vesp['clavecct']!='')  {echo $row_vesp['clavecct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-institution"></i>&nbsp;
            <strong>NombreCT:</strong><br>
            <span><?php  if($row_vesp['nombrect'] !=''){echo $row_vesp['nombrect']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

             <div class="col-md-12">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Domicilio:</strong><br>
            <span><?php  if($row_vesp['dom_cct']!=''){echo $row_vesp['dom_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-6">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Municipio:</strong><br>
            <span><?php  if($row_vesp['municipio'] !=''){echo $row_vesp['municipio']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-map-marker"></i>&nbsp;
            <strong>Localidad:</strong><br>
            <span><?php  if($row_vesp['localidad']!=''){echo $row_vesp['localidad']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
           
            <div class="col-md-6">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono:</strong><br>
            <span><?php  if($row_vesp['tel_cct']!=''){echo $row_vesp['tel_cct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular:</strong><br>
            <span><?php  if($row_vesp['cel_ct']!=''){echo $row_vesp['cel_ct']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-user"></i>&nbsp;
            <strong>Nombre Director:</strong><br>
            <span><?php  if($row_vesp['nom_dir']!=''){echo $row_vesp['nom_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-phone"></i>&nbsp;
            <strong>Telefono Director:</strong><br>
            <span><?php if($row_vesp['tel_dir'] != '' ) {echo $row_vesp['tel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-mobile-phone"></i>&nbsp;
            <strong>Celular Director:</strong><br>
            <span><?php  if($row_vesp['cel_dir']!=''){echo $row_vesp['cel_dir']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            <div class="col-md-6">
            <i class="fa fa-male"></i>&nbsp;
            <strong>Total Alumnos:</strong><br>
            <span><?php  if($row_vesp['total_alumnos']!=''){echo $row_vesp['total_alumnos']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>

            </div>
            </div>

            <div class="ibox-footer">
            <span class="pull-right">
            </span>                      
            </div>
            </div>
            </div>
            <?php }?>

            <!--Equipamiento-->
            <?php if($row_esc['equipos'] > 0){ ?>
            <div class="col-lg-7">
            <div class="ibox collapsed">
            <div class="ibox-title">
            <h5>Equipamiento<small class="m-l-sm">letra pequeña</small></h5>
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
            <div class="row show-grid">
            <div class="col-md-6">
            <i class="fa fa-desktop"></i>&nbsp;
            <strong>Equipos:</strong><br>
            <span><?php  if($row_esc['equipos']!=''){echo $row_esc['equipos']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-desktop"></i>&nbsp;
            <strong>Equipo Real</strong><br>
            <span><?php  if($row_esc['eq_real']!=''){echo $row_esc['eq_real']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-desktop"></i>&nbsp;
            <strong>Equipamiento:</strong><br>
            <span><?php  if($row_esc['equipamiento']!=''){echo $row_esc['equipamiento']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            <div class="col-md-6">
            <i class="fa fa-desktop"></i>&nbsp;
            <strong>Reequipamiento:</strong><br>
            <span><?php  if($row_esc['reequipamiento']!=''){echo $row_esc['reequipamiento']; }else{ echo 'NO CONOCIDO';} ?></span>
            </div>
            </div>
            </div>

            <div class="ibox-footer">
            <span class="pull-right">
            </span>                      
            </div>
            </div>
            </div>
            <?php } ?>


            <!--Conectividad Actual-->
            <div class="col-lg-7">
            <div class="ibox collapsed">
            <div class="ibox-title">
            <h5>Conectividad<small class="m-l-sm">letra pequeña</small></h5>
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
            <table id="ct_conect" class="table table-bordered">
            <thead>
            <tr>
            <th>Conectividad</th>
            <th>Proveedor</th>
            <th>Contrato</th>
            <th>IDE</th>
            <th>IP</th>
            <th>Pago hecho</th>
            <th>tipo conexion</th>
            <th>Reportar</th>
            </tr>
            </thead>
            </table>
            </div>
            <div class="ibox-footer">
            <span class="pull-right">
            </span>                      
            </div>
            </div>
            </div>

           
            <input type="text"  id="latitud" hidden name="latitud" value="<?php echo $latitud;?>">
            <input type="text"  id="longitud" hidden name="longitud" value="<?php echo $longitud;?>">
            <input type="text"  id="clavecct" hidden name="clave" value="<?php echo $clavecct;?>">
            </div>
            </div>  
            
            <?php

            include('modals/modal_ubi.php');
            include('modals/modal_report_aula.php');
            include('modals/modal_historial.php');

            }

