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

        <title>SICAT V3</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">


        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/plugins/sweetalert/sweetalert.min.js"></script>
        <link href="../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

     
     
      
        
       
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
        <h5>Reportes en Seguimiento</h5>
        <div class="ibox-tools">
            
        </div>
        </div>
        <div class="ibox-content">
        <div class="table-responsive">
        <form method="POST"  action>
        <input type="hidden"  id="idserie" name="idserie" value="0">
        </form>
        <table id="dt_segui" class="table table-bordered table-hover" cellspacing="0" >
        <thead>
        <tr>
          <th>Folio</th>
          <th>Clave Escuela</th>
          <th>Nombre Escuela</th>
          <th>Localidad</th>
          <th>Municipio</th>
          <th>Fecha de Alta</th>
          <th>Num Reporte</th>
          <th>Nombre Director</th>
          <th>Celular Director</th>
          <th>Diagnostico</th>
          <th>Seguimiento</th>
          <th>Accion</th>
        </tr>
        </thead>
        </table>
        
        </div>
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
        <script type="text/javascript">
        
        $(document).on("ready", function(){

             listarSeguimiento();
             
        });

        </script>
      </body>
      </html>
<?php
}
?>