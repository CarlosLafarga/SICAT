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
                    <h5>Usuarios</h5>
                    <div class="ibox-tools">
                    <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                    </a>
                   
                    </div>
                    </div>
                    <div class="ibox-content">
                    <div class="">
                    <a  class="btn btn-primary " href="#" id="new_user" data-toggle="modal" data-target="#modal_new_user">Nuevo Usuario</a>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Usuario</th>
                        <th>Nombre Usuario</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>funciones</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?PHP $b = listar();?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Usuario</th>
                        <th>Nombre Usuario</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>funciones</th>
                    </tr>
                    </tfoot>
                    </table>
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
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

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

       


        });

        
    </script>
      </html>
<?php

}
?>