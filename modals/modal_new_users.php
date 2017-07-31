           

          <!-- MODAL DE NUEVO USUARIO-->
           <div class="modal inmodal" id="modal_new_user" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content animated bounceInRight">
           <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <i class="fa fa-edit modal-icon"></i>
           <h4 class="modal-title">Editar Captura</h4>
           <small class="font-bold"></small>
           </div>
           <div class="modal-body">

           <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Editar Equipo</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
            <form name="new_user" id="new_user" method="POST" >

            <input type="hidden"  hidden id="id_pieza" name="id" value="" class="form-control">
            <input type="hidden"  hidden id="opcion" name="opcion" value="modificar" class="form-control">

            <div class="row show-grid">

            <div class="col-md-4">
            <label>Nombre Usuario:</label>&nbsp;<small class="text-navy"></small><br>
            <input type="text"   id="name_user" name="name_user" class="form-control">

            </div>
            <div class="col-md-4">
            <label>Password:</label>&nbsp;<small class="text-navy"></small><br>
            <input type="text" id="pass" name="pass" class="form-control">
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
              <option value="brigadista">Brigadista</option>
              <option value="programador">Programador</option>
              <option value="mesa de ayuda">Mesa de Ayuda</option>
              <option value="externo">Externo</option>
            </select>
            </div>
           
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="guardar" id="guardar" class="btn btn-primary btn-sm" value="Guardar">
            </div>
            </div>
             
           </form>
           </div>                    
           </div>
           </div>
           </div>
           </div>
           </div>
           <div class="modal-footer">
           <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
           </div>
           </div>
           </div>
           </div>