  var listarVisita = function(){
            

            var table = $("#dt_visita").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controllers/listarReportesVisitaController.php"
                },
                "columns":[
                    {"data":"id"},
                    {"data":"clave"},
                    {"data":"escuela"},
                    {"data":"loc"},
                    {"data":"mun"},
                    {"data":"fechaAlta"},
                    {"data":"diagnostico"},
                    {"data":"seguimiento"}
                    
                ],
                    dom: '<"html5buttons"B>lTfgitp', 
                         //'Bfrtip',

                 "buttons":[                    
                    
                    {extend: 'excel', title: 'Reportes Con Visita'}
                ]
            });


            

        }

        

