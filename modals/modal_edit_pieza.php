           


           <div class="modal inmodal" id="modal_pieza" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form name="edit" id="edit" method="POST" >
            <input type="hidden"  hidden id="id_pieza" name="id" value="" class="form-control">
            <input type="hidden"  hidden id="opcion" name="opcion" value="modificar" class="form-control">
            <div class="row show-grid">
            <div class="col-md-4">
            <label>No Serie:</label>&nbsp;<small class="text-navy">Numero de serie del equipo.</small><br>
            <input type="text"  onlyread id="serie" name="serie" class="form-control">

            </div>
            <div class="col-md-4">
            <label>Teclado:</label><br>
            <input type="text" id="teclado" name="teclado" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tarjeta Madre:</label><br>
            <input type="text" id="mother" name="mother" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Pantalla:</label><br>
            <input type="text" id="pantalla" name="pantalla" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Disco Duro:</label><br>
            <input type="text" id="dd" name="dd" class="form-control">
            </div>
            
            <div class="col-md-4">
            <label>Memoria Ram:</label><br>
            <input type="text" id="ram" name="ram" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Wlan:</label><br>
            <input type="text" id="wlan" name="wlan" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tarjeta Red (Encendido):</label><br>
            <input type="text" id="red" name="red" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Bateria:</label><br>
            <input type="text" id="bateria" name="bateria" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Cargador:</label><br>
            <input type="text" id="cargador" name="cargador" class="form-control">
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="guardar" id="guardar" class="btn btn-primary btn-sm" value="guardar">
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