  var listarSeguimiento = function(){
            

            var table = $("#dt_segui").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controllers/ListarReportesSeguimientoController.php"
                },
                "columns":[
                    {"data":"id"},
                    {"data":"clave"},
                    {"data":"escuela"},
                    {"data":"loc"},
                    {"data":"mun"},
                    {"data":"fechaAlta"},
                    {"data":"NumReporte"},
                    {"data":"name_direct"},
                    {"data":"cel_dir"},
                    {"data":"diagnostico"},
                    {"data":"seguimiento"},
                    {"defaultContent": "<button type='button'  class='Editar btn btn-primary'>Cerrar Reporte</button>"}
                    
               ],
                    dom: '<"html5buttons"B>lTfgitp', 
                         //'Bfrtip',

                 "buttons":[                    
                    
                    {extend: 'excel', title: 'Reportes Con Falla'}
                ]
            });


            obtener_serie("#dt_segui",table);

        }

        var obtener_serie = function(tbody,table){

                $(tbody).on("click", "button.Editar", function(){
                    var data = table.row($(this).parents("tr")).data();
                    location.href = "cerrarReporte.php?id="+data.id+"";
                    
                });
        }

        

