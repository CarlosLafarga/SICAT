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
        <h5>Equipos Donadores</h5>
        <div class="ibox-tools">
            
        </div>
        </div>
        <div class="ibox-content">
        <div class="table-responsive">
        <table id="dt_reportado" class="table table-bordered table-hover" cellspacing="0" >
        <thead>
        <tr>
          <th>Folio</th>
          <th>No Serie</th>
          <th>Codigo teclado</th>
          <th>Codigo MotherBoard</th>
          <th>Codigo Pantalla</th>
          <th>Codigo Disco Duro</th>
          <th>Codigo Memoria Ram</th>
          <th>Codigo Wlan</th>
          <th>Codigo Red y Encendido</th>
          <th>Codigo Bateria</th>
          <th>Codigo Cargador</th>
          <th>Editar</th>
        </tr>
        </thead>
        </table>
        </div>
        </div>                    
        </div>
        </div>
        </div>
        </div> 
                
        <?PHP include("../modals/modal_edit_pieza.php");?>
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
             guardar();

        });

        var guardar = function(){

            $("form").on("submit",function(e){
                e.preventDefault();
                var frm = $(this).serialize();
                //console.log(frm);
                $.ajax({
                    method:"POST",
                    url:"../Controllers/guardarPiezasController.php",
                    data:frm

                }).done(function(info){
                    var chuy = JSON.parse(info);
                    if(chuy.respuesta == "BIEN"){
                        swal({
                        title: "Buen Trabajo!",
                        text: "DATOS GUARDADOS CON EXITO",
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#ff0000",
                        confirmButtonText: "Aceptar",
                        closeOnConfirm: true
                        },
                        function(){
                        location.reload();  
                        });          
                       
                       
                    
                    }else{


                        swal({
                        title: "Oops!",
                        text: "Error en enviar datos",
                        type: "danger",
                        showCancelButton: false,
                        confirmButtonColor: "#ff0000",
                        confirmButtonText: "Aceptar",
                        closeOnConfirm: true
                        },
                        function(){
                        location.reload();  
                        }); 
                        
                    }
                     //listar();
                      
                });

            });
        }

        var obtener_data_editar = function(tbody,table){
            $(tbody).on("click","button.editar",function(){
                var data = table.row($(this).parents("tr")).data();
                //console.log(data);
                var idpieza = $("#id_pieza").val(data.Id),
                    serie = $("#serie").val(data.no_serie),
                    teclado = $("#teclado").val(data.teclado_cod),
                    mother = $("#mother").val(data.motherboard_cod),
                    pantalla = $("#pantalla").val(data.pantalla_cod),
                    dd = $("#dd").val(data.discoduro_cod),
                    ram = $("#ram").val(data.memoriaram_cod),
                    wlan = $("#wlan").val(data.wlan_cod),
                    red = $("#red").val(data.redboard_cod),
                    bateria = $("#bateria").val(data.bateria_cod),
                    cargador = $("#cargador").val(data.cargador_cod);

            });

        }

        var listar = function(){
            
            var table = $("#dt_reportado").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controllers/listarPiezasController.php"
                },
                "columns":[
                    {"data":"Id"},
                    {"data":"no_serie"},
                    {"data":"teclado_cod"},
                    {"data":"motherboard_cod"},
                    {"data":"pantalla_cod"},
                    {"data":"discoduro_cod"},
                    {"data":"memoriaram_cod"},
                    {"data":"wlan_cod"},
                    {"data":"redboard_cod"},
                    {"data":"bateria_cod"},
                    {"data":"cargador_cod"},
                    {"defaultContent": "<button class='editar btn btn-primary' href='#' id='mod' data-toggle='modal' data-target='#modal_pieza'><i class='fa fa-edit'></i></button>"}
                ]
            });

            obtener_data_editar("#dt_reportado tbody",table);

        }


        </script>
      </body>
      </html>
<?php
}
?>