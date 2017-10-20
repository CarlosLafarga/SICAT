        <!DOCTYPE html>
        <html>

        <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SICAM</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

        </head>

        <body class="gray-bg">

        <div class="loginColumns animated fadeInDown">
        <div class="row">

        <div class="col-md-6">
        <img src="img/sec.png" style="margin-left: -40px;">
        <h2 class="font-bold">Bienvenido a sistema SICAT</h2>

        <p>
        Sistema integral de control de aulas de medios.
        </p>
       
        </div>

        <div class="col-md-6">
        <div class="ibox-content">
        <form class="m-t" role="form" action="index.php" method="post">
        <div class="form-group">
        <input name="user" type="text" class="form-control" placeholder="Username" required="">
        </div>
        <div class="form-group">
        <input name="pswd" type="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit" name="iniciar" class="btn btn-primary block full-width m-b">Inicar Sesion</button>
	      <a href="#">
        
        </a>

        <p class="text-muted text-center">
                        
        </p>    
        </form>
        <p class="m-t">
        <small></small>
        </p>
        </div>
        </div>
        </div>
        <hr/>
        <div class="row">
        <div class="col-md-6">
        Aula de tecnologia
        </div>
        <div class="col-md-6 text-right">
        <small>© 2016-2017</small>
        </div>
        </div>
        </div>

        </body>

        </html>
     <?PHP

    require_once("sesion.class.php");
    include('libreria.php');
    $sesion = new sesion();

    if( isset($_POST["iniciar"])){
    
     $usuario = $_POST["user"];
     $password = sha1($_POST["pswd"]);

    if(validarUsuario($usuario,$password) == true){ 
    	
       $sesion->set("usuario",$usuario);
       echo "<script language='JavaScript'>";
       echo "location = 'principal.php'";
       echo "</script>";

    }elseif (validarUsuario($usuario,$password) == false) {
    	
  		 echo '<script>
              swal({
              title: "Algo Anda Mal!",
              text: "Usuario y contraseña incorrecto",
              type: "warning",
              showCancelButton: false,
              confirmButtonColor: "#ff0000",
              confirmButtonText: "Aceptar",
              closeOnConfirm: true
              },
              function(){
              window.location.href="index.php";
              });
              </script> ';
    }
    }
  ?>

  
  
