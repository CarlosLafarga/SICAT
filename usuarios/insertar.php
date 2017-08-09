<?php
include('../libreria.php');
include_once('../Controllers/usuariosController.php');
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
            <h5>Nuevo Usuario</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
            <form action="insertar.php" name="new_user" id="new_user" method="POST" onsubmit=" return validarformulario()" >
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Nombre Usuario:</label>&nbsp;<small class="text-navy"></small><br>
            <input type="text"   id="name_user" name="name_user" class="form-control">

            </div>
            <div class="col-md-4">
            <label>Password:</label>&nbsp;<small class="text-navy"></small><br>
            <input type="password" id="pass" name="pass" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Nombre Completo:</label><br>
            <input type="text" id="name_complet" name="name_complet" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Correo:</label><br>
            <input type="email" id="correo" name="correo" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Telefono:</label><br>
            <input type="text" id="telefono" name="telefono" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>Celular:</label><br>
            <input type="text" id="celular" name="celular" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Puesto:</label><br>
            <select name="puesto" id="puesto" class="form-control">

              <option value="">Seleccione un Puesto</option>
              <option value="0">Administrador</option>
              <option value="1">Programador</option>
              <option value="2">Brigadista</option>
              <option value="3">Mesa de Ayuda</option>
              <option value="4">Garantia</option>
              <option value="5">Vehiculos</option>
              <option value="6">Servicio Social</option>
              <option value="7">Externo</option>
              
            </select>
            </div>
           
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="insertar" id="insertar" class="btn btn-primary btn-sm" value="Guardar">
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
        <?php  include("../modals/modal_new_users.php");?>
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
        
      </body>
      <script>
      

         
       function validarformulario(){
          
        
           var name_user = document.getElementById("name_user").value;
           var pass = document.getElementById("pass").value;
           var name_complete = document.getElementById("name_complete").value;
           var correo = document.getElementById("correo").value;
           var telefono = document.getElementById("telefono").value;
           var celular = document.getElementById("celular").value;
           var puesto = document.getElementById("puesto").selectedIndex;

        if(name_userme == null || name_user.length == 0){
          sweetAlert("Cuidado...", "El campo Nombre de usuario esta vacio rellene el campo.", "error");
          return false;
         }

         
         if(pass == null || pass.length == 0){
          sweetAlert("Cuidado", "El campo password esta vacio rellene el campo.", "error");
          return false;
         }
         
         
         if(name_complete == null || name_complete.length == 0){
          sweetAlert("cuidado", "El campo Nombre completo esta vacio rellene el campo.", "error");
          return false;
         }
         
         if(correo == null || correo.length == 0){
          sweetAlert("Cuidado", "El campo Correo esta vacio rellene el campo.", "error");
          return false;
         }
         if(telefono == null || telefono.length == 0){
          sweetAlert("Cuidado", "El campo Telefono esta vacio rellene el campo.", "error");
          return false;
         }
          if(celular == null || celular.length == 0){
          sweetAlert("Cuidado", "El campo Celular esta vacio rellen el campo.", "error");
          return false;
         }

         if( puesto == null || puesto == "" ) {
          sweetAlert("Cuidado", "Seleccione una opcion", "error");
           return false;
          }
      }

        
    </script>
    </html>
<?php
    
   if(isset($_POST['insertar'])){

      $name_user = $_POST['name_user'];
      $password = $_POST['pass'];
      $name_complete = $_POST['name_complet'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      $celular = $_POST['celular'];
      $puesto = $_POST['puesto'];

      insertar($name_user,$password,$name_complete,$correo,$telefono,$celular,$puesto);

   }
}
?>