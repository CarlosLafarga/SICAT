  var listar = function(){
            

            var table = $("#reportfalla").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controllers/listarreportesfallaController.php"
                },
                "columns":[
                    {"data":"id"},
                    {"data":"clave"},
                    {"data":"escuela"},
                    {"data":"loc"},
                    {"data":"mun"},
                    {"data":"fechaAlta"},
                    {"data":"diagnostico"},
                    {"data":"seguimiento"},
                    {"defaultContent": "<button type='button'  class='Editar btn btn-primary'>Cambiar Estatus</button>"}
                    
                ],
                    dom: '<"html5buttons"B>lTfgitp', 
                         //'Bfrtip',

                 "buttons":[                    
                    
                    {extend: 'excel', title: 'Reportes Con Falla'}
                ]
            });


            obtener_serie("#reportfalla",table);

        }

        var obtener_serie = function(tbody,table){

                $(tbody).on("click", "button.Editar", function(){
                    var data = table.row($(this).parents("tr")).data();
                    location.href = "cambiarStatusFalla.php?id="+data.id+"";
                    
                });
        }

