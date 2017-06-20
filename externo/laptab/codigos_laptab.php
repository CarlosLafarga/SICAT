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
            <h5>Desbloqueo Laptop y Tablet MX</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
            

          
          
             <form name="equipos" id="equipos" method="POST" id="form_rep" onsubmit="return validarFormulario()">
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Tipo de Equipo:</label><br>
            <select  id="equipo" name="equipo" class="form-control">
                <option value="TABLET">TABLET</option>
                <option value="LAPTOP_MX">LAPTOP MX</option>
            </select>
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>No Serie:</label><br>
            <input type="text" id="serie" placeholder="Ej: SNX o IUS o SZLES" name="serie" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Clave CT:</label><br>
            <input type="text" id="clave" placeholder="Ej: 26DPR0000H" name="clave" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Escuela:</label><br>
            <input type="text" id="escu" placeholder="Ej: Benito juárez" name="escu" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Localidad:</label><br>
            <input type="text" id="loc" placeholder="Ej: Miguel Aleman" name="loc" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Municipio:</label><br>
            <input type="text" id="mun" placeholder="Ej: Hermosillo" name="mun" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>Nombre del niñ@:</label><br>
            <input type="text" id="nino" placeholder=" Ej: Juan Perez Perez"  name="nino" class="form-control">
            </div>
            <div class="col-md-4">
            <label>CURP:</label><br>
            <input type="text" id="curp" placeholder="" name="curp" class="form-control">
            </div>
            
            </div>
            <div class="col-md-12">
            <h2>Informaci&oacute;n del equipo a desbloquear</h2>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>BOOT TIK:</label><br>
            <input type="text" id="boot" placeholder="Ej: 00 00 00" name="boot" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>HARDWARE ID:</label><br>
            <input type="text" id="hard" placeholder="Ej: ECA86B57248D" name="hard" class="form-control">
            </div>
            <div  class="col-md-4">
            <label>PROVISIONAL NUMBER:</label><br>
            <input type="text" id="churro" placeholder="Ej: S99" name="number" class="form-control">
            </div>
            

            </div>

            <div class="row show-grid">
            <div class="col-md-12">
            <label>Diagnostico equipo:</label><br>
            <textarea rows="6" name="diag" placeholder="Ej: Bloqueada" class="form-control"></textarea> 
            </div>
            </div>
            <div class="col-md-12">
            <h2>Informaci&oacute;n del Solicitante</h2>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Nombre Completo:</label><br>
            <input type="text" id="nombre" placeholder="" name="nombre" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tel o Cel:</label><br>
            <input type="text" id="cel" placeholder="" name="cel" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Correo Electronico:</label><br>
            <input type="email" id="correo" placeholder="" name="correo" class="form-control">
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="aceptar" class="btn btn-primary" >
            <input type="button" name="cancelar" value="Cancelar" class="btn btn-primary" >
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
    $(document).ready(function(){

    $("#clave").change(function(){
             
             var clavecct = $("#clave").val();
             var resultado = 0;

             $.ajax({
                type:'POST',
                url:'../helpers/existeclave.php',
                async:false,
                data:{clavecct:clavecct},
                success:function(xresultado){
                var resultado  = JSON.parse(xresultado);
                console.log(xresultado);

                    if(resultado.Registrado == 1){

                    sweetAlert("CUIDADO","Esta clave no existe verifique si esta correcta","warning");
                   $("#clave").val("");

                    }

                }
            });

           });
    /*llave del document ready*/ });

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

       $("#aceptar").click(function(){

        var tipoeq = document.getElementById("equipo").value;
        var serie = document.getElementById("serie").value;
        var clave = document.getElementById("clave").value;
        var escuela = document.getElementById("escu").value;
        var loc = document.getElementById("loc").value;
        var mun = document.getElementById("mun").value;
        var nino = document.getElementById("nino").value;
        var curp = document.getElementById("curp").value;

        var boot =   document.getElementById("boot").value;
        var hard =   document.getElementById("hard").value;
        var number = document.getElementById("churro").value;
        var nombre = document.getElementById("nombre").value;
        var cel =    document.getElementById("cel").value;
        var correo = document.getElementById("correo").value;
            
            if(validarDatos() == true){
            insertarDatos(
                $("#serie").val(),
                $("#clave").val(),
                $("#escu").val(),
                $("#loc").val(),
                $("#mun").val(),
                $("#nino").val(),
                $("#curp").val(),
                $("#boot").val(),
                $("#hard").val(),
                $("#churro").val());
                $("#nombre").val());
                $("#cel").val());
                $("#correo").val());
            }
           });
            
         

        function insertarDatos(serie,clave,escuela,loc,mun,nombre_nino,curp,boot,hardware,provisional,namecomplet,telcel,correo){
           
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

    </script>

    

</body>

</html>
