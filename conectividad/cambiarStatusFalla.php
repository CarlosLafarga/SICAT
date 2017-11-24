<?php
include("../libreria.php");
@require_once("../sesion.class.php");
$sesion = new sesion();
$usuario = $sesion->get("usuario");

if( $usuario == false )
{

 echo "<script language='JavaScript'>";
 echo "location = '../index.php'";
 echo "</script>";
}
else
{
 ?>

        <!DOCTYPE html>
        <html>

        <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Reportes Conectividad Falla</title>

        <?php include("../include/css.php");?>

       
        </head>

        <body class="canvas-menu">
        <div  id="wrapper">

        <!--MENU SISTEMA SICAT-->
        <nav class="navbar-default navbar-static-side" role="navigation">
        <?php include ("../include/menu.php");?>
        </nav>
        <!--TERMINA MENU SISTEMA SICAT-->

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
        <li>
        <span class="m-r-sm text-muted welcome-message"><label>BIENVENIDO:</label> <?php  echo $usuario; ?></span>
        </li>
                  
                        
        <li>
        <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/cerrarsesion.php"><i class="fa fa-sign-out"></i> CERRAR SESION
        </a>
        </li>
        </ul>

        </nav>
        </div>

        <!--LOGOTIPO Y INPUT PARA BUSCAR CENTROS DE TRABAJO-->    
        <?php include("../include/header_normal.php"); ?>
        
        <div class="wrapper wrapper-content">  
        <!--ESTE ES EL CONTENIDO PRINCIPAL DEL SISTEMA  WEB-->
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
        <div class="ibox-title">
        <h5>Cambiar Estatus Reporte </h5><span class="label label-primary"><?php if(isset($_GET['id'])){ $id = $_GET['id']; } echo $id?></span>
        <div class="ibox-tools">
           
        </div>
        </div>
        <div class="ibox-content">

             <form name="cambiarstatus" method="post" >
                <?php 
                if(isset($_POST['id'])){
                 $id = $_GET['id'];
                 include("../conect/conexion2.php");
                 $cn = Conectarse();
                 $sql = "SELECT * FROM reportes_conect WHERE id = $id ";
                 $resultado = mysql_query($sql,$cn) or die (mysql_error());
                 while($reg = mysql_fetch_array($resultado)) {


                 $folio = $reg['id'];
                 $clave = $reg['clave'];
                 $escuela = $reg['escuela'];
                 
                 }
               }
               ?>
                <hr class="hr-line-dashed">
                <h3>Datos del centro de trabajo</h3>
                <hr class="hr-line-dashed">
                <div class="row">
                    
                  <div class="col-md-2"><label>Folio:</label>
                  <input name="folio" value ="<?php echo $folio;?>" type="text" readonly class="form-control">
                  </div>

                  <div class="col-md-2"><label>Clave Ct:</label>
                  <input value ="<?php echo $clave;?>" type="text"  readonly class="form-control">
                  </div>

                  <div class="col-md-4"><label>Nombre Ct:</label><input value ="<?php echo $escuela;?>"type="text" readonly  class="form-control"></div>
                  <div class="col-md-2"><label>Localidad:</label><input type="text" readonly  class="form-control"></div>
                  <div class="col-md-2"><label>Municipio:</label><input type="text" readonly  class="form-control"></div>
                </div>
                <hr class="hr-line-dashed">
                <h3>Tipo conectividad</h3>
                <hr class="hr-line-dashed">
                 <div class="row">
                    <div class="col-md-3"><label>Servicio:</label><input type="text"  readonly class="form-control"></div>
                    <div class="col-md-3"><label>Proveedor:</label><input type="text" readonly  class="form-control"></div>
                    <div class="col-md-3"><label>Pago Por:</label><input type="text" readonly  class="form-control"></div>
                    <div class="col-md-3"><label>Identificador:</label><input type="text" readonly class="form-control"></div>
                </div>
                <hr class="hr-line-dashed">
                <h3>Datos Contacto</h3>
                <hr class="hr-line-dashed">
                <div class="row">
                    <div class="col-md-4"><label>Nombre Director:</label><input type="text" readonly  class="form-control"></div>
                    <div class="col-md-2"><label>Celular Director:</label><input type="text" readonly  class="form-control"></div>
                    <div class="col-md-4"><label>Nombre Contacto:</label><input type="text" readonly  class="form-control"></div>
                    <div class="col-md-2"><label>Celular Contacto:</label><input type="text" readonly  class="form-control"></div>
                </div>
                <hr class="hr-line-dashed">
                <h3>Datos Reporte</h3>
                <hr class="hr-line-dashed">
                 <div class="row">
                    <div class="col-md-6"><label>Diagnostico:</label><textarea  readonly class="form-control"></textarea> </div>
                    <div class="col-md-6"><label>Seguimiento:</label><textarea  readonly class="form-control"></textarea> </div>
                </div>
                <hr class="hr-line-dashed">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-0">
                        <button class="btn btn-white" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                     </div>
                </div>
            </form>
        </div>                    
        </div>
        </div>
        </div>
        </div> 
        </div>
        <!--FOOTER DE PLATILLA--> 
        <?php include("../include/footer.php");?>

        </div>
        </div>

        <?php include("../include/js.php");?>
       
      </body>
      </html>
<?php
}
?>