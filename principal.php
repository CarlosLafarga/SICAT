<?php
include('libreria.php');
@require_once("sesion.class.php");
$sesion = new sesion();
$usuario = $sesion->get("usuario");

if( $usuario == false )
{

 echo "<script language='JavaScript'>";
 echo "location = 'index.php'";
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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpybY31ahV0W6puLxn1vaz0bZZOi3ejH8" type="text/javascript"></script>
        
       
        </head>

        <body onload="load()" class="canvas-menu">
        <div id="wrapper">

        <!--MENU SISTEMA SICAT-->
        <nav class="navbar-default navbar-static-side" role="navigation">
        <?php include ("include/menu.php");?>
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
        <a href="cerrarsesion.php"><i class="fa fa-sign-out"></i> CERRAR SESION
        </a>
        </li>
        </ul>

        </nav>
        </div>

        <!--LOGOTIPO Y INPUT PARA BUSCAR CENTROS DE TRABAJO-->    
        <?php include("include/headers.php"); ?>

        <div class="wrapper wrapper-content">  
        <?PHP
        if(isset($_POST['buscar'])){
        $clavecct = $_POST['clavect'];
        $b = consultarEsc($clavecct);
        }
        ?>
        </div>
        <!--FOOTER DE PLATILLA--> 
        <?php include("include/footer.php");?>

        </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="js/plugins/dataTables/datatables.min.js"></script>
    

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <script type="text/javascript">
        
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf',   title: 'ExampleFile'},

                {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ]

        });

            
       listar();
         });

            

        function load() {
        var latitud  = document.getElementById("latitud").value;
        var longitud = document.getElementById("longitud").value;
        var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(latitud,longitud),
        zoom: 12,
        mapTypeId: 'roadmap'
        });
        var image = 'https://maps.google.com/mapfiles/kml/shapes/library_maps.png';
        var point = new google.maps.LatLng( latitud,longitud);
        var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: image
          });
     
        }

        function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
        });
        } 

        function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

        request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
        };

        request.open('GET', url, true);
        request.send(null);
        }

        function doNothing() {}
        
          var listar = function(){
            
            var clave = $("#clavecct").val();
            var arreglo = {clavecct:clave};
            var table = $("#ct_conect").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "Controllers/listarConectController.php?clavecct=<?php echo $clavecct?>"
                },
                "columns":[
                    {"data":"conectividad"},
                    {"data":"proveedor"},
                    {"data":"contrato"},
                    {"data":"ide"},
                    {"data":"ip"},
                    {"data":"pagoint"},
                    {"data":"tipo_conect"},
                    {"defaultContent": "<button class='editar btn btn-primary' href='#' id='mod' data-toggle='modal' data-target='#modal_pieza'><i class='fa fa-edit'></i></button>"}
                ]
            });

            

        }
        
      </script>
      </body>
      </html>
      <?php
      }
