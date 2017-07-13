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
    <link href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    

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
            <li>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/externo">
             <i class="fa fa-arrow-left"></i> Pagina Principal
            </a>
           </li>      
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
            <h5>Lista Escuelas</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
                <form method="POST" id="avanzada"  name="avanzada" action="buscador.php" onsubmit="return validarDatos()" class="form-horizontal">
                <div class="row show-grid">

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.clavee.disabled=!document.avanzada.clavee.disabled" value="">
                Clave Escuela 
                <input disabled="true" type="text"  id="clave" name="clavee" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label> 
                <input type="checkbox"  onclick="document.avanzada.escuela.disabled=!document.avanzada.escuela.disabled"  value=""> 
                Nombre Escuela 
                <input disabled="true" type="text" id="escuela" name="escuela" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.mun.disabled=!document.avanzada.mun.disabled"  value="">
                Municipio
                <input disabled="true" type="text" id="mun" name="mun" class="form-control">
                </label>
                </div>

                <div class="col-md-4">
                <label>
                <input type="checkbox" onclick="document.avanzada.loc.disabled=!document.avanzada.loc.disabled"  value="">
                Localidad <input disabled="true" type="text" id="loc" name="loc" class="form-control">
                </label>
                </div>
                <div class="hr-line-dashed"></div>
                
                <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="avanzada1">Buscar</button>
                <button class="btn btn-primary" id="cancelar" type="button" name="cancelar">Cancelar</button>
                <input type="hidden" name="clavecct" value="<?php echo $_POST['clavee'];?>">
                <input type="hidden" name="nombrect" value="<?php echo $_POST['escuela'];?>">
                <input type="hidden" name="muni" value="<?php echo $_POST['mun'];?>">
                <input type="hidden" name="loca" value="<?php echo $_POST['loc'];?>">
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
    <script src="../js/plugins/dataTables/datatables.min.js"></script>

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
        function validarDatos(){

            var error = 0;
            if($("#clave").val() == "" ) error +=1;
            if($("#escuela").val() == "" )error +=1;
            if($("#mun").val() == "" )error +=1;
            if($("#loc").val() == "" )error +=1;
            if(error == 4){
                sweetAlert("Cuidado", "Debe de rellenar campo no serie.", "error");
                return false;
            }else{

              return true;
          }
           }

           $("#cancelar").click(function(){
            
                window.location.href='index.php';
           });
    </script>

</body>

</html>

