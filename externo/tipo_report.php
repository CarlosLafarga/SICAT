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
            <h5>Datos del centro de trabajo</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
             <?PHP 
             include("libreria.php");
             if(isset($_GET['clavecct'])){
                $clavecct = $_GET['clavecct'];
             }
             datosescolares($clavecct);
             ?>       
            </div>
            </div>
            </div>
            </div>
            </div>


            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Tipos de Reporte</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
            <div class="row">
            <!--Aula de Medios-->

            <div class="col-lg-3">
                        <div class="widget-head-color-box red-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Aula de medios o HDT
                            </h2>
                                
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Reporte Aula medios o hdt</h4>
                            <p>Fallas en equipos de computo instalados como su nombre lo indica en Aula de medios o hdt de cada plantel educativo.</p>
                            <p>Presentado cualquier tipo de fallas como son problemas con el Equipo de computo, Impresora, Monitor, Proyector y Pizarron.</p>
                            <div class="text-right">
                                <input type="submit" name="aulam" id="aulam" class="btn btn-primary" value="Reportar"  data-toggle='modal' data-target='#modal_am'>
                                
                            </div>
                        </div>
            </div>
                
            <!--Solucion Aulas-->
            
            <div class="col-lg-3">
                        <div class="widget-head-color-box red-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Solucion del Aula
                            </h2>
                                
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Reporte Solucion del aula</h4>
                            <p>Fallas de proyecto federal PIAD, instalados en salones de 5to grado de primaria como lo son Servidor, Proyector, Router.</p>
                            <div class="text-right">
                               <input type="submit" name="solucion" id="solucion" class="btn btn-primary" value="Reportar"  data-toggle='modal' data-target='#modal_solu'>
                            </div>
                        </div>
                </div>
            
            <!--Conectividad-->
            
             <div class="col-lg-3">
                        <div class="widget-head-color-box red-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                               Reporte de  Conectividad
                            </h2>
                                
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Reporte de conectividad</h4>
                            <p>Reportar fallas de servicio de internet instalados en el plantel, independientemente del proveedor, ubicacion o responsable de pago.</p>
                            <div class="text-right">
                               <input type="submit" name="aulam" id="aulam" class="btn btn-primary" value="Reportar">
                            </div>
                        </div>
                </div>
            
            <!--Tabletas y Laptop Mx-->
            
            <div class="col-lg-3">
                        <div class="widget-head-color-box red-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Laptop y Tablet MX
                            </h2>
                                
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Desbloqueo laptop y tablet mx</h4>
                            <p>Apoyo para solicitud de codigos o Archivos para desbloqueo de Tabletas y laptop mx entregadas a ni&ntilde;os en a&ntilde;o 2013 2014 y 2015 del estado de Sonora.</p>
                            <div class="text-right">
                                <a class="btn btn-primary" href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/externo/laptab/codigos_laptab.php?clave=<?php echo $_GET['clavecct'];?>">Reportar</a>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>




            </div>
            </div>

            

          
            
            <?PHP
            

            ?>

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

    <script type="text/javascript">

    function tipoaula(sel) {
      if  (sel.value=="AM"){
           AM = document.getElementById("AM");
           AM.style.display = "";

           HDT = document.getElementById("HDT");
           HDT.style.display = "none";

      }else{

           AM = document.getElementById("AM");
           AM.style.display = "none";

           HDT = document.getElementById("HDT");
           HDT.style.display = "";
      }
    }


  

     function validarFormulario(){

        var tipoeq = document.getElementById("equipo").value;
        var serie = document.getElementById("serie").value;
        var clave = document.getElementById("clave").value;
        var escuela = document.getElementById("escu").value;
        var loc = document.getElementById("loc").value;
        var mun = document.getElementById("serie").value;
        var nino = document.getElementById("nino").value;
        var curp = document.getElementById("curp").value;

        var boot =   document.getElementById("boot").value;
        var hard =   document.getElementById("hard").value;
        var number = document.getElementById("churro").value;
        var nombre = document.getElementById("nombre").value;
        var cel =    document.getElementById("cel").value;
        var correo = document.getElementById("correo").value;

        if(serie == null || serie.length == 0){
          sweetAlert("Oops...", "El campo del No serie esta vacio rellene por favor.", "error");
          return false;
         }

         if(clave == null || clave.length == 0){
          sweetAlert("Oops...", "El campo del Clave CT esta vacio rellene por favor.", "error");
          return false;
         }

          if(escuela == null || escuela.length == 0){
          sweetAlert("Oops...", "El campo del Escuela esta vacio rellene por favor.", "error");
          return false;
         }

          if(loc == null || loc.length == 0){
          sweetAlert("Oops...", "El campo del Localidad esta vacio rellene por favor.", "error");
          return false;
         }

          if(mun == null || mun.length == 0){
          sweetAlert("Oops...", "El campo del Municipio esta vacio rellene por favor.", "error");
          return false;
         }

         if(nino == null || nino.length == 0){
          sweetAlert("Oops...", "El campo del Nombre del Niñ@ esta vacio rellene por favor.", "error");
          return false;
         }

         if(curp == null || curp.length == 0){
          sweetAlert("Oops...", "El campo del CURP esta vacio rellene por favor.", "error");
          return false;
         }

        if(boot == null || boot.length == 0){
          sweetAlert("Oops...", "El campo del BOOT TIK esta vacio rellene por favor.", "error");
          return false;
         }

         
         if(hard == null || hard.length == 0){
          sweetAlert("Oops...", "El campo HARDWARE ID  esta vacio rellene por favor.", "error");
          return false;
         }
         
         
         if(number == null || number.length == 0 || tipoeq == "LAPTOP_MX"){
          sweetAlert("Oops...", "El campo PRIVISIONAL NUMBER esta vacio rellene por favor.", "error");
          return false;
         }
         
         if(nombre == null || nombre.length == 0){
          sweetAlert("Oops...", "El campo de Nombre completo del solicitante  esta vacio rellene por favor.", "error");
          return false;
         }
         if(cel == null || cel.length == 0){
          sweetAlert("Oops...", "El campo Tel o Cel esta vacio por favor rellene por favor.", "error");
          return false;
         }
         if(correo == null || correo.length == 0){
          sweetAlert("Oops...", "El campo Correo Electronico esta vacio por favor rellene por favor.", "error");
          return false;
         }
      }


    </script>

    

</body>

</html>
