               <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
               <div class="modal-dialog">
               <div class="modal-content animated bounceInRight">
               <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <i class="fa fa-search modal-icon"></i>
               <h4 class="modal-title">busqueda Avanzada</h4>
               <small class="font-bold">Seleccione los campos por los cuales desea filtrar.</small>
               </div>
               <div class="modal-body">
               <form method="POST" id="avanzada" name="avanzada" action="index.php" class="form-horizontal">
               <div class="form-group"><label class="col-sm-2 control-label"><br/><small class="text-navy"></small></label>
                        			
                
                
                <label> 
                <input type="checkbox" id="no_serie" onclick="document.avanzada.serie.disabled=!document.avanzada.serie.disabled"  value=""> 
                No.Serie 
                <input disabled="true" type="text" name="serie" id="serie" class="form-control">
                </label>
                

                <label>
                <input type="checkbox" onclick="document.avanzada.clavee.disabled=!document.avanzada.clavee.disabled" id="clave" name="clave" value="">Clave Escuela 
                <input disabled="true" type="text"  id="clavee" name="clavee" class="form-control">
                </label>

                <label> 
                <input type="checkbox"  onclick="document.avanzada.escuela.disabled=!document.avanzada.escuela.disabled"  value=""> 
                Nombre Escuela 
                <input disabled="true" type="text" name = "escuela" class="form-control">
                </label>

                <label>
                <input type="checkbox" onclick="document.avanzada.name.disabled=!document.avanzada.name.disabled"  value="">
                Nombre(s)
                <input disabled="true" type="text" name="name"  class="form-control">
                </label>

                <label>
                <input type="checkbox" onclick="document.avanzada.paterno.disabled=!document.avanzada.paterno.disabled" value="">
                Apellido Paterno 
                <input disabled="true" name="paterno" type="text" class="form-control">
                </label>


                <label>
                <input type="checkbox" onclick="document.avanzada.materno.disabled=!document.avanzada.materno.disabled" value="">
                Apellido Materno<input disabled="true" name = "materno" type="text" class="form-control">
                </label>

                <label>
                <input type="checkbox" onclick="document.avanzada.curp.disabled=!document.avanzada.curp.disabled"  value="">
                CURP <input disabled="true" disabled="true" name="curp" type="text" class="form-control">
                </label>

                <div class="checkbox i-checks"><label> <input type="checkbox" onclick="document.avanzada.mun.disabled=!document.avanzada.mun.disabled"  value="">
                  <i></i> Municipio <input disabled="true" type="text" name= "mun" class="form-control"></label></div>

                <div class="checkbox i-checks"><label> <input type="checkbox" onclick="document.avanzada.loc.disabled=!document.avanzada.loc.disabled"  value="">
                 <i></i> Localidad <input disabled="true" type="text" name="loc" class="form-control"></label></div>

                
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-w-m btn-success" type="submit" name="avanzada1">Buscar</button>
                </div>
                </div>
                </form>
                </div>
                </div>
                </div>
                </div>