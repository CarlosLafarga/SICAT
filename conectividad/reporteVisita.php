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
        <h5>Equipos Reportados</h5>
        <div class="ibox-tools">
            
        </div>
        </div>
        <div class="ibox-content">
        <div class="table-responsive">
        <form method="POST"  action>
        <input type="hidden"  id="idserie" name="idserie" value="0">
        </form>
        <table id="dt_reportado" class="table table-bordered table-hover" cellspacing="0" >
        <thead>
        <tr>
          <th>Folio</th>
          <th>Clave Escuela</th>
          <th>Nombre Escuela</th>
          <th>Localidad</th>
          <th>Municipio</th>
          <th>Nombre Director</th>
          <th>Cel Director</th>
          <th>Nombre Contacto</th>
          <th>Cel Contacto</th>
          <th>Num Reporte</th>
          <th>Servicio</th>
          <th>Proveedor</th>
          <th>Pagado Por</th>
          <th>Identificador</th>
          <th>Diagnostico</th>
          <th>Seguimiento</th>
          <th>Acciones</th>
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

        <!-- Mainly scripts -->
        <script src="../js/jquery-2.1.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../js/plugins/dataTables/datatables.min.js"></script>
        <script src="../js/plugins/iCheck/icheck.min.js"></script>

    

        <!-- Custom and plugin javascript -->
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/pace/pace.min.js"></script>
        <script type="text/javascript">
        
        $(document).on("ready", function(){

             listar();
             
        });

        


        var listar = function(){
            

            var table = $("#dt_reportado").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controllers/listarEquiposDesController.php"
                },
                "columns":[
                    {"data":"id"},
                    {"data":"no_serie"},
                    {"data":"curp"},
                    {"data":"nombre_nino"},
                    {"data":"boot_tik"},
                    {"data":"hardware_id"},
                    {"data":"provisional_num"},
                    {"data":"tipo_equipo"},
                    {"defaultContent": "<button type='button'  class='desbloquear btn btn-primary'>Desbloqueo</button>"}
                    
                ]
            });


            obtener_serie("#dt_reportado",table);

        }

        var obtener_serie = function(tbody,table){
                $(tbody).on("click", "button.desbloquear", function(){
                    var data = table.row($(this).parents("tr")).data();
                    var serie = $("#idserie").val(data.no_serie);
                    location.href = "insertardes.php?serie="+data.no_serie+"&id="+data.id+"";
                    console.log(data.no_serie);
                });
        }


        </script>
      </body>
      </html>
<?php
}
?>