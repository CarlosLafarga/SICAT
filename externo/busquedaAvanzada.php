<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SICAT EXTERNO</title>

    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/css/animate.css" rel="stylesheet">
    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/css/style.css" rel="stylesheet">
    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    

</head>

<body class="top-navigation">

        <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-header">
        
                
        </div>

        <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav">
        <!--LOGOTIPO-->
        <img  src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/img/sec.png" >

        </ul>
        <ul class="nav navbar-top-links navbar-right">
                    
        </ul>
        </div>
        </nav>
        </div>
        
            <div class="wrapper wrapper-content">
            <div class="container">

            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Busqueda Avanzada</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
                <form method="POST" id="avanzada" name="avanzada"  class="form-horizontal">
                <div class="row show-grid">

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.clavee.disabled=!document.avanzada.clavee.disabled" id="clave" name="clave" value="">Clave Escuela 
                <input disabled="true" type="text"  id="clavee" name="clavee" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label> 
                <input type="checkbox"  onclick="document.avanzada.escuela.disabled=!document.avanzada.escuela.disabled"  value=""> 
                Nombre Escuela 
                <input disabled="true" type="text" name = "escuela" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.mun.disabled=!document.avanzada.mun.disabled"  value="">
                Municipio
                <input disabled="true" type="text" name= "mun" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.loc.disabled=!document.avanzada.loc.disabled"  value="">
                Localidad <input disabled="true" type="text" name="loc" class="form-control">
                </label>
                </div>
                <div class="hr-line-dashed"></div>
                
                <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="avanzada1">Buscar</button>
                <button class="btn btn-primary" type="button" name="cancelar">Cancelar</button>
                </div>
                </div>
                </form>

            </div>
            </div>
            </div>
            </div>
            </div>
          
            </div>
            </div>
             

            <div class="footer">
            <div class="pull-right">
            <strong></strong>
            </div>
            <div>
            <strong>Copyright</strong> Aulas de Tecnologia &copy; 2016-2017
            </div>
            </div>
            

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/jquery-2.1.1.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/bootstrap.min.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/inspinia.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/demo/peity-demo.js"></script>
    <script type="text/javascript">
          $(document).on("ready", function(){

             listar();
             

          });

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

            

        }
    </script>

    

</body>

</html>

