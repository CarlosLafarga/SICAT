<?php
include('../libreria.php');
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

        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/plugins/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript">
       
        function mostrar(valor)
        {
        if(valor == 'TABLET')
        {
        document.getElementById('id').style.visibility ="hidden";
        document.getElementById('number').style.visibility ="visible";

        }else{
        document.getElementById('id').style.visibility="visible";
        document.getElementById('number').style.visibility ="hidden";
        onchange="mostrar(this.value)"
        }
        }
        </script>
     
      
        
       
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
            <h5>Formulario de Captura</h5>
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
           
            </div>
            </div>
            <div class="ibox-content">
            <div class="col-md-12">
            <h2>Piezas del Equipo</h2>
            </div>   
            <!--Comienza formulario de captura de datos para laptops o tablets-->
            <form name="equipos" id="equipos" method="POST" id="form_rep" onsubmit="return validarFormulario()">
            
            <div class="row show-grid">
            <div class="col-md-4">
            <label>No Serie:</label>&nbsp;<small class="text-navy">Numero de serie del equipo.</small><br>
            <input type="text"  id="serie" name="serie" class="form-control">

            </div>
            <div class="col-md-4">
            <label>Teclado:</label><br>
            <input type="text" id="teclado" name="teclado" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tarjeta Madre:</label><br>
            <input type="text" id="mother" name="mother" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Pantalla:</label><br>
            <input type="text" id="pantalla" name="pantalla" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Disco Duro:</label><br>
            <input type="text" id="dd" name="dd" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>Memoria Ram:</label><br>
            <input type="text" id="ram" name="ram" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Wlan:</label><br>
            <input type="text" id="wlan" name="wlan" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tarjeta Red (Encendido):</label><br>
            <input type="text" id="red" name="red" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Bateria:</label><br>
            <input type="text" id="bateria" name="bateria" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Cargador:</label><br>
            <input type="text" id="cargador" name="cargador" class="form-control">
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="button" name="aceptar" id="aceptar" class="btn btn-primary btn-sm" value="aceptar">
            <input type="button" name="limpiar" id="limpiar" class="btn btn-primary btn-sm" value="Cancelar">
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
    

        <!-- Custom and plugin javascript -->
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/pace/pace.min.js"></script>
        <script type="text/javascript">
           
           $("#limpiar").click(function(){
            LimpiarCampos();

           });

           $("#aceptar").click(function(){

            if(validarDatos() == true){
            insertarDatos($("#serie").val(),$("#teclado").val(),$("#mother").val(),$("#pantalla").val(),$("#dd").val(),$("#ram").val(),$("#wlan").val(),$("#red").val(),$("#bateria").val(),$("#cargador").val());
            }
           });
           

           $("#serie").change(function(){
             
             var serie = $("#serie").val();
             var resultado = 0;

             $.ajax({
                type:'POST',
                url:'../helpers/existeSerie.php',
                async:false,
                data:{subserie:serie},
                success:function(xresultado){
                   var resultado  = JSON.parse(xresultado);
                   console.log(xresultado);

                    if(resultado.Registrado == 0){

                        sweetAlert("CUIDADO","Numero de Serie ya esta capturado","warning");
                        LimpiarCampos();

                    }

                }
            });

           });
            
           function insertarDatos(serie,teclado,mother,pantalla,dd,ram,wlan,red,bateria,cargador){
            
            var arreglo = {noserie:serie,
                           codteclado:teclado,
                           codmother:mother,
                           codpantalla:pantalla,
                           coddd:dd,
                           codram:ram,
                           codwlan:wlan,
                           codred:red,
                           bateria:bateria,
                           cargador:cargador};

            var resultado = 0;
            $.ajax({
                type:'POST',
                url: '../Controllers/insertarPiezaController.php',
                async:false,
                data:arreglo,
                success:function(xresultado){

                   var resultado  = JSON.parse(xresultado);
                   console.log(xresultado);
                   if(resultado.Registrado == 1){

                    sweetAlert("Buen Trabajo","DATOS GUARDADOS CON EXITO","success");
                    LimpiarCampos();
                   
                    }else{

                    sweetAlert("Cuidado", "DATOS NO GUARDADO.", "error");

                   }    
                }
            })
           }

           function validarDatos(){

            if($("#serie").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo no serie.", "error");
                $("#serie").focus();
                return false;
            }
            if($("#teclado").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo teclado.", "error");
                $("#teclado").focus();
                return false;
            }
            if($("#mother").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Tarjeta Madre.", "error");
                $("#mother").focus();
                return false;
            }
            if($("#pantalla").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Pantalla.", "error");
                $("#pantalla").focus();
                return false;
            }
            if($("#dd").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Disco Duro.", "error");
                $("#dd").focus();
                return false;
            }
            if($("#ram").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Memoria Ram.", "error");
                $("#ram").focus();
                return false;
            }
            if($("#wlan").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Wlan.", "error");
                $("#wlan").focus();
                return false;
            }
            if($("#red").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Tarjeta Red.", "error");
                $("#red").focus();
                return false;
            }
            if($("#bateria").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Bateria.", "error");
                $("#bateria").focus();
                return false;
            }
            if($("#cargador").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Cargador.", "error");
                $("#cargador").focus();
                return false;
            }

            return true;

           }

           function LimpiarCampos(){ 

           document.equipos.serie.value=""; 
           document.equipos.teclado.value=""; 
           document.equipos.mother.value=""; 
           document.equipos.pantalla.value=""; 
           document.equipos.dd.value=""; 
           document.equipos.ram.value=""; 
           document.equipos.wlan.value=""; 
           document.equipos.red.value=""; 
           document.equipos.cargador.value=""; 
           document.equipos.bateria.value=""; 
           $("#serie").focus(); 
          } 

        </script>
        
      </body>
      </html>
<?php
 
}
?>