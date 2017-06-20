
           <div class="modal inmodal" id="modal_am" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content animated bounceInRight">
           <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <i class="fa fa-keyboard-o modal-icon"></i>
           <h4 class="modal-title">Capturar Reporte</h4>
           <small class="font-bold"></small>
           </div>
           <div class="modal-body">
           <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5></h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">

            <form name="aula_m" id="aula_m" method="POST" >
            <input type="hidden"  hidden id="id_pieza" name="id" value="" class="form-control">
            <input type="hidden"  hidden id="opcion" name="opcion" value="modificar" class="form-control">
            <div class="row show-grid">
            <div class="col-md-12">
            <label>Tipo de Aula:</label>&nbsp;<small class="text-navy"></small><br>
            <select type="select" id="aula" name="aula" class="form-control" onChange="tipoaula(this)">
            <option value="AM" >AULA DE MEDIOS</option>
            <option value="HDT" >AULA HDT</option>
            </select>
            </div>
            </div>
          
            
            
            <div id="AM" style="display:;" class="row show-grid">
            <div class="col-md-4">
            <h3>Aula de medios</h3>
            <input type="radio" name="aulam" value="male"> Equipo no Enciende<br>
            <input type="radio" name="aulam" value="female"> Sistema operativo<br>
            <input type="radio" name="aulam" value="other"> Fallas de red<br>
            <input type="radio" name="aulam" value="other"> Otra falla
            <input type="text" disabled name="otrafalla_am" class="form-control">
            </div>
            </div>

            <div id="HDT" style="display: none;" class="row show-grid">
            <div class="col-md-4">
            <h3>Aula HDT</h3>
            <input type="radio" name="aula_hdt" value="male"> Proyector<br>
            <input type="radio" name="aula_hdt" value="female"> Pizarron<br>
            <input type="radio" name="aula_hdt" value="female"> Router<br>
            <input type="radio" name="aula_hdt" value="other"> otra falla
            <input type="text" disabled name="otrafalla_hdt" class="form-control">
            </div>
            </div>

            <div  class="row show-grid">
            <div class="col-md-12">
            <label>Describa la Falla</label><br>
            <textarea  class="form-control" name="desc" id="desc" ></textarea>
            </div>
            </div>

            <div  class="row show-grid">
            <div class="col-md-4">
            <label>Nombre completo:</label><br>
            <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="col-md-4">
            <label>Telefono o Celular:</label>
            <input type="text" name="telcel" id="telcel" class="form-control">
            </div>

            <div class="col-md-4">
            <label>Correo:</label>
            <input type="email" name="correo" id="correo" class="form-control">
            </div>

            <div class="col-md-8">
            <label>Razon social:<small>(director,docente,alumno o padre de familia)</small></label><br>
            <input type="text" name="razon" id="razon" class="form-control">

            </div>
            </div>

            <div class="row show-grid">
            <div class="col-md-12">
            <input type="submit" name="enviar" id="enviar" class="btn btn-primary btn-sm" value="Enviar">
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
           <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
           </div>
           </div>
           </div>
           </div>