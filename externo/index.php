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
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5></h5>
            <div class="ibox-tools">
           
            </div>
            </div>
            <div class="ibox-content">
                <form method="POST" name="externo">
                    <label>Clave CT</label>
                    <input type="text" name="clavecct"  class="form-control" ><br>
                    <input type="submit" name="aceptar" value="Consular" class="btn btn-w-m btn-primary">
                </form>
            <a  data-toggle="modal" data-target="#myModal" >Busqueda Avanzada</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
             
            <?PHP include("modal_avanzada.php"); ?>

            <div class="footer">
            <div class="pull-right">
            <strong>Ing.Carlos Octavio Preciado Lafarga</strong>
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


    

</body>

</html>
<?PHP 
    include("libreria.php");
    if( isset($_POST["aceptar"])){
    $clavecct = $_POST['clavecct'];
    consultarct($clavecct);
    }

?>
