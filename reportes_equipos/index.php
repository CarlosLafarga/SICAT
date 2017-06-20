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
            <h2>Informaci&oacute;n del Equipo</h2>
            </div>   
            <!--Comienza formulario de captura de datos para laptops o tablets-->
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
            <input type="text" id="serie" name="serie" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Clave CT:</label><br>
            <input type="text" id="clave" name="clave" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Escuela:</label><br>
            <input type="text" id="escu" name="escu" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Localidad:</label><br>
            <input type="text" id="loc" name="loc" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Municipio:</label><br>
            <input type="text" id="mun" name="mun" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>Nombre del niñ@:</label><br>
            <input type="text" id="nino" name="nino" class="form-control">
            </div>
            <div class="col-md-4">
            <label>CURP:</label><br>
            <input type="text" id="curp" name="curp" class="form-control">
            </div>
            
            </div>

            <div class="row show-grid">
            <div class="col-md-4">
            <label>BOOT TIK:</label><br>
            <input type="text" id="boot" name="boot" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>HARDWARE ID:</label><br>
            <input type="text" id="hard" name="hard" class="form-control">
            </div>
            <div  class="col-md-4">
            <label>PROVISIONAL NUMBER:</label><br>
            <input type="text" id="churro" name="number" class="form-control">
            </div>
            

            </div>

            <div class="row show-grid">
            <div class="col-md-12">
            <label>Diagnostico equipo:</label><br>
            <textarea rows="6" name="diag" class="form-control"></textarea> 
            </div>
            </div>
            <div class="col-md-12">
            <h2>Informaci&oacute;n del Solicitante</h2>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Nombre Completo:</label><br>
            <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tel o Cel:</label><br>
            <input type="text" id="cel" name="cel" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Correo Electronico:</label><br>
            <input type="email" id="correo" name="correo" class="form-control">
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="aceptar" class="btn btn-primary btn-sm" >
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
        
        $(document).ready(function(){
        
        // generamos un evento cada vez que se pulse una tecla

        $("#serie").keyup(function(){
        
            // enviamos una petición al servidor mediante AJAX enviando el id
            // introducido por el usuario mediante POST
            $.post("miarchivo.php", {"serie":$("#serie").val(),"equipo":$("#equipo").val()}, function(data){
            
                // Si devuelve un nombre lo mostramos, si no, vaciamos la casilla
                if(data.clave)
                    $("#clave").val(data.clave);
                else
                    $("#clave").val("");
                    
                // Si devuelve un apellido lo mostramos, si no, vaciamos la casilla
                if(data.escu)
                    $("#escu").val(data.escu);
                else
                    $("#escu").val("");

                if(data.loc)
                    $("#loc").val(data.loc);
                else
                    $("#loc").val("");

                if(data.mun)
                    $("#mun").val(data.mun);
                else
                    $("#mun").val("");

                if(data.nino)
                    $("#nino").val(data.nino);
                else
                    $("#nino").val("");

                 if(data.curp)
                    $("#curp").val(data.curp);
                else
                    $("#curp").val("");

            },"json");

            
        });

        

            

        });

        $("#serie").change(function(){
             
             var clavecct = $("#serie").val();
             var resultado = 0;

             $.ajax({
                type:'POST',
                url:'../helpers/existeEquipo.php',
                async:false,
                data:{clave:clavecct},
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

        function validarFormulario(){
          
        var tipoeq = document.getElementById("equipo").value;
        var boot =   document.getElementById("boot").value;
        var hard =   document.getElementById("hard").value;
        var number = document.getElementById("churro").value;
        var nombre = document.getElementById("nombre").value;
        var cel =    document.getElementById("cel").value;
        var correo = document.getElementById("correo").value;

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


           function LimpiarCampos(){ 

           document.equipos.serie.value=""; 
           document.equipos.clave.value=""; 
           document.equipos.escu.value=""; 
           document.equipos.loc.value=""; 
           document.equipos.mun.value=""; 
           document.equipos.nino.value=""; 
           document.equipos.curp.value=""; 
           
           $("#serie").focus(); 

          } 
       
      </script>
      </body>
      </html>
<?php
        
        
        if(isset($_POST['aceptar'])){
            
          if(isset($_POST['serie'])){$no_serie =$_POST['serie'];}
          if(isset($_POST['clave'])){$clavecct =$_POST['clave'];}
          if(isset($_POST['escu'])){$nombre_esc =$_POST['escu'];}
          if(isset($_POST['loc'])){$nombre_loc =$_POST['loc'];}
          if(isset($_POST['mun'])){$nombre_mun = $_POST['mun'];}
          if(isset($_POST['curp'])){$curp =$_POST['curp'];}
          if(isset($_POST['nino'])){$nombre_nino =$_POST['nino']; }
          if(isset($_POST['boot'])){$boot_tik =$_POST['boot'];}
          if(isset($_POST['hard'])){$hardware_id =$_POST['hard'];}
          if(isset($_POST['number'])){$provisional_num =$_POST['number'];}
          if(isset($_POST['diag'])){$diagnostico =$_POST['diag'];}
          if(isset($_POST['nombre'])){$nombre_sol =$_POST['nombre'];}
          if(isset($_POST['cel'])){$tel_cel =$_POST['cel'];}
          if(isset($_POST['correo'])){$correo =$_POST['correo'];}
          $status ='En cola';
          $capturo = $usuario;
          if(isset($_POST['equipo'])){$tipo_equipo =$_POST['equipo'];}

         insertar_equipo_rep($no_serie,$clavecct,$nombre_esc,$nombre_loc,$nombre_mun,$curp,$nombre_nino,$boot_tik,$hardware_id,$provisional_num,$diagnostico,$nombre_sol,$tel_cel,$correo,$status,$capturo,$tipo_equipo);
        }
}
?>