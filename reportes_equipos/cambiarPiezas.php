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
               
        
            <form name="piezas" id="piezas" method="POST" id="form_rep"  >
            
            <div class="row show-grid">
            <div class="col-md-4">
            <label>No Serie:</label>&nbsp;<small class="text-navy">Numero de serie del equipo receptor.</small><br>
            <input type="text"  id="serie" name="serie" class="form-control">
            </div>
            </div>

            <div class="row show-grid">
            <div class="col-md-12">
            <h2>Piezas a Cambiar</h2>
            </div> 
            </div>
            
            <div class="row show-grid">
            <label class="col-sm-1">Teclado<br><small class="text-navy"></small></label>
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="teclado" id="teclado" onclick="funcion()" > </span> 
            <input type="text" class="form-control" disabled name="teclado_text" id="teclado_text"></div>
            </div>
            
            
            
            <label class="col-sm-1">Tarjeta Madre<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="mother" id="mother" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled name="mother_text" id="mother_text"></div>
            </div>
            

            
            <label class="col-sm-1">Pantalla<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="pantalla" id="pantalla" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled name="pantalla_text" id="pantalla_text"></div>
            </div>
            

            
            <label class="col-sm-1">Disco Duro<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="dd" id="dd" onclick="funcion()" > </span> 
            <input type="text" class="form-control" disabled name="dd_text" id="dd_text" ></div>
            </div>
            

            
            <label class="col-sm-1">Memoria Ram<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="ram" id="ram" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled name="ram_text" id="ram_text" ></div>
            </div>
            

            
            <label class="col-sm-1">Wlan<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="wlan" id="wlan" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled name="wlan_text" id="wlan_text" ></div>
            </div>
            

            
            <label class="col-sm-1">Tarjeta Red(encendido)<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="redboard" id="redboard" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled  name="redboard_text" id="redboard_text"></div>
            </div>

            <label class="col-sm-1">Bateria<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="bateria" id="bateria" onclick="funcion()"> </span> 
            <input type="text" class="form-control" disabled name="bateria_text" id="bateria_text"></div>
            </div>

             <label class="col-sm-1">Cargador<br><small class="text-navy"></small></label>
            
            <div class="col-md-5">
            <div class="input-group m-b">
            <span class="input-group-addon"> 
            <input type="checkbox" name="cargador" id="cargador" onclick="funcion()"> </span> 
            <input type="text" class="form-control"disabled  name="cargador_text" id="cargador_text"></div>
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
            insertarDatos(
                $("#serie").val(),
                $("#teclado_text").val(),
                $("#mother_text").val(),
                $("#pantalla_text").val(),
                $("#dd_text").val(),
                $("#ram_text").val(),
                $("#wlan_text").val(),
                $("#redboard_text").val(),
                $("#bateria_text").val(),
                $("#cargador_text").val());
            }
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
                url: '../Controllers/insertarPiezarepController.php',
                async:false,
                data:arreglo,
                success:function(xresultado){

                   var resultado  = JSON.parse(xresultado);
                   console.log(resultado);
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

            
            if($("#serie").val() == "" ){
                sweetAlert("Cuidado", "Debe de rellenar campo no serie.", "error");
                $("#serie").focus();
                return false;
            }
          

          if(document.piezas.teclado.checked == true){
            if($("#teclado_text").val() == "" ){
                sweetAlert("Cuidado", "Debe de rellenar campo teclado.", "error");
                $("#teclado").focus();
                return false;
            }
          }

          if(document.piezas.mother.checked == true){
            if($("#mother_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Tarjeta Madre.", "error");
                $("#mother").focus();
                return false;
            }
           }

           if(document.piezas.pantalla.checked == true){
            if($("#pantalla_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Pantalla.", "error");
                $("#pantalla").focus();
                return false;
            }
           }

           if(document.piezas.dd.checked == true){
            if($("#dd_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Disco Duro.", "error");
                $("#dd").focus();
                return false;
            }
           }

           if(document.piezas.ram.checked == true){
            if($("#ram_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Memoria Ram.", "error");
                $("#ram").focus();
                return false;
            }
           }

           if(document.piezas.wlan.checked == true){
            if($("#wlan_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Wlan.", "error");
                $("#wlan").focus();
                return false;
            }
            }

            if(document.piezas.redboard.checked == true){
            if($("#redboard_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Tarjeta Red.", "error");
                $("#red").focus();
                return false;
            }
            }

            if(document.piezas.bateria.checked == true){
            if($("#bateria_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Bateria.", "error");
                $("#bateria").focus();
                return false;
            }
            }

            if(document.piezas.cargador.checked == true){
            if($("#cargador_text").val() == ""){
                sweetAlert("Cuidado", "Debe de rellenar campo Cargador.", "error");
                $("#cargador").focus();
                return false;
            }
           }

            if($('input[type=checkbox]:checked').length === 0){
             sweetAlert("Cuidado", "Debe de seleccionar al menos una opcion de pieza para remplazar.", "error");
             return false;
           }

            return true;

           }

           function LimpiarCampos(){ 

           document.piezas.serie.value=""; 
           document.piezas.teclado_text.value=""; 
           document.piezas.teclado.checked = false;
           document.piezas.teclado_text.disabled = true;

           document.piezas.mother_text.value=""; 
            document.piezas.mother.checked = false;
           document.piezas.mother_text.disabled = true;

           document.piezas.pantalla_text.value=""; 
            document.piezas.pantalla.checked = false;
           document.piezas.pantalla_text.disabled = true;

           document.piezas.dd_text.value="";
            document.piezas.dd.checked = false;
           document.piezas.dd_text.disabled = true;

           document.piezas.ram_text.value="";
            document.piezas.ram.checked = false;
           document.piezas.ram_text.disabled = true;

           document.piezas.wlan_text.value="";
            document.piezas.wlan.checked = false;
           document.piezas.wlan_text.disabled = true;

           document.piezas.redboard_text.value="";
            document.piezas.redboard.checked = false;
           document.piezas.redboard_text.disabled = true;

           document.piezas.cargador_text.value=""; 
            document.piezas.cargador.checked = false;
           document.piezas.cargador_text.disabled = true;

           document.piezas.bateria_text.value=""; 
            document.piezas.bateria.checked = false;
           document.piezas.bateria_text.disabled = true;
           $("#serie").focus(); 
          } 



       function funcion(){ 

       if(document.piezas.teclado.checked == true){ 
          
          document.piezas.teclado_text.disabled = false; 
          
        }else{ 
        
        document.piezas.teclado_text.disabled = true; 
        
        } 

        if(document.piezas.mother.checked == true){

            document.piezas.mother_text.disabled = false;

        }else{

            document.piezas.mother_text.disabled = true;
        }

        if(document.piezas.pantalla.checked == true){

            document.piezas.pantalla_text.disabled = false;

        }else{

            document.piezas.pantalla_text.disabled = true;
        }

         if(document.piezas.dd.checked == true){

            document.piezas.dd_text.disabled = false;

        }else{

            document.piezas.dd_text.disabled = true;
        }

        if(document.piezas.ram.checked == true){

            document.piezas.ram_text.disabled = false;

        }else{

            document.piezas.ram_text.disabled = true;
        }

        if(document.piezas.wlan.checked == true){

            document.piezas.wlan_text.disabled = false;

        }else{

            document.piezas.wlan_text.disabled = true;
        }

        if(document.piezas.redboard.checked == true){

            document.piezas.redboard_text.disabled = false;

        }else{

            document.piezas.redboard_text.disabled = true;
        }

        if(document.piezas.bateria.checked == true){

            document.piezas.bateria_text.disabled = false;

        }else{

            document.piezas.bateria_text.disabled = true;
        }

        if(document.piezas.cargador.checked == true){

            document.piezas.cargador_text.disabled = false;

        }else{

            document.piezas.cargador_text.disabled = true;
        }



        } 
        </script>
        
      </body>
      </html>
<?php
 
}
?>