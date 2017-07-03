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
        <h5>Capturar codigo o Subir archivo</h5>
        <div class="ibox-tools">
            
        </div>
        </div>
        <div class="ibox-content">

            <form name="subir" id="subir" method="POST" enctype="multipart/form-data">
            <div class="row show-grid">
            <div class="col-md-4">
               <label>Tipo desbloqueo</label><br>
               <select type="select" id="aula" name="aula" class="form-control" onChange="tipodes(this);">
               <option value="arch" >Archivo</option>
               <option value="codi" >Codigo</option>
               </select>
            </div>
            <div  id="arch" style="display: none;" class="col-md-4">
                <label>Archivo a subir.</label>
                <input type="file" name="archivo" id="archivo" class="form-control">
            </div>
            <div id="codi" style="display: none;" class="col-md-4">
                <label>Codigo Desbloqueo</label>
                <input type="text" name="codigo" id="codigo" class="form-control">
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="button" name="aceptar" value="Subir" onClick="insertarArchivo();" class="btn btn-primary">
            <input type="button" name="cancelar" value="Cancelar" class="btn btn-primary">
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

        function tipodes(sel) {
         if  (sel.value=="arch"){
              AM = document.getElementById("arch");
              AM.style.display = "";

              HDT = document.getElementById("codi");
              HDT.style.display = "none";

         }else if(sel.value=="codi") {

              AM = document.getElementById("arch");
              AM.style.display = "none";

              HDT = document.getElementById("codi");
              HDT.style.display = "";
          }
         }

         function insertarArchivo() {

            var parametros = new FormData($("#subir")[0]);

            $.ajax({
                data:parametros,
                url:"../Controllers/insertarArchivoController.php",
                type:"POST",
                contentType:false,
                processData:false,
                beforesend:function(){

                },
                success:function(response){

                    
                    sweetAlert("CUIDADO",response,"warning");
                }
            });
         }


    </script>
      </body>
      </html>
<?php
}
?>