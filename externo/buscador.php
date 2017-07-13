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
        <?php
            if(isset($_POST['clavee'])){
             $clavecct = $_POST['clavee'];
            }else{ $clavecct ="";}
            if( isset($_POST['escuela'])){
                 $nombrect = $_POST['escuela'];
            }else{ $nombrect ="";}
            if (isset($_POST['mun'])) {
               $municipio = $_POST['mun'];
            }else{ $municipio ="";}
            if (isset($_POST['loc'])) {
                $localidad = $_POST['loc'];
            }else{ $localidad ="";}
             
        
        include("conexion.php");
        $cn = Conectarse();
        $sql = "SELECT * FROM ct_escuelas LEFT JOIN ct_direscolar ON 
        ct_escuelas.clavecct = ct_direscolar.clavecct 
        WHERE  ct_escuelas.clavecct LIKE '%$clavecct%'
        AND ct_escuelas.nombrect LIKE '%$nombrect%'
        AND ct_direscolar.municipio LIKE '%$municipio%'
        AND ct_direscolar.localidad LIKE '%$localidad%';";

        $ejecutar = mysql_query($sql,$cn) or die(mysql_error());

        ?>
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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Clavecct</th>
                        <th>Nombre ct</th>
                        <th>Domicilio</th>
                        <th>Turno</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                     $i=0;
                     while($row_esc=mysql_fetch_array($ejecutar))
                     {
                     $i++; 
                     ?>     
                     <tr onClick="redireccionar()">
                     <td><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/externo/laptab/codigos_laptab.php?clavecct=<?PHP echo $row_esc['clavecct']?>"><?PHP echo $i;?></a></td>
                     <td><?PHP echo $row_esc["clavecct"];?></td>
                     <td><?PHP echo $row_esc["nombrect"];?></td>
                     <td><?PHP echo $row_esc["dom_cct"];?></td> 
                     <td><?PHP echo $row_esc["tur_des"];?></td>
                     <td><?PHP echo $row_esc["municipio"];?></td>
                     <td><?PHP echo $row_esc["localidad"];?></td>
                     </tr>
                     <?php
                     }
                     ?>
                    </tbody>
                    <tfoot>
                    <tr>
                         <th>No</th>
                        <th>Clavecct</th>
                        <th>Nombre ct</th>
                        <th>Domicilio</th>
                        <th>Turno</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        
                    </tr>
                    </tfoot>
                    </table>
                    <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/externo/busquedaAvanzada.php" class="btn btn-primary">Nueva Busqueda</a>
                    </div>

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
    <script src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/js/plugins/dataTables/datatables.min.js"></script>

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

            
       
         });

        
      </script>
    

</body>

</html>

