             <div class="sidebar-collapse">
             <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
             <ul class="nav metismenu" id="side-menu">
             <li class="nav-header">
             <div class="dropdown profile-element"> <span>
             <img alt="image" class="img-circle" src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/img/profile_small.jpg" />
             </span>
             <a data-toggle="dropdown" class="dropdown-toggle" href="#">
             <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nombre Usuario</strong>
             </span> <span class="text-muted text-xs block">Puesto <b class="caret"></b></span> </span> </a>
             <ul class="dropdown-menu animated fadeInRight m-t-xs">
             <li><a href="profile.html">Perfil</a></li>
             <li><a href="contacts.html">Contacts</a></li>
             <li><a href="mailbox.html">Mailbox</a></li>
             <li class="divider"></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/cerrarsesion.php">Cerrar Sesion</a></li>
             </ul>
             </div>
           
             <div class="logo-element">
              SEC
             </div>
             </li>

             <!--Inician los items-->
             <li>
             <a href="index.html"><i class="fa fa-home"></i> <span class="nav-label">Pagina Principal</span> <span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/principal.php">Buscar CT</a></li>
             </ul>            
             </li>
             <li>
             <a href="index.html"><i class="fa fa-laptop"></i> <span class="nav-label">Equipos MX</span> <span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/adminequipo.php">Administrar Equipos</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/">Capturar equipo</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/capturado.php">Equipo Capturado</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/reportados.php">Equipo Reportado</a></li>
             </ul>            
             </li>


              <li>
             <a href="index.html"><i class="fa fa-wifi"></i> <span class="nav-label">Conectividad</span> <span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/conectividad/reporteFalla.php">Reportes con Falla</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/conectividad/reporteSeguimientoFalla.php">Reportes en Seguimiento</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/conectividad/reporteVisita.php">Reportes con Visita</a></li>
             </ul>            
             </li>

             <li>
             <a href="index.html"><i class="fa fa-archive"></i> <span class="nav-label">Inventario MX</span> <span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/capPieza.php">Capturar Piezas</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/cambiarPiezas.php">Cambiar  Piezas</a></li>
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/reportes_equipos/modificarPieza.php">Listado Piezas</a></li>
             </ul>            
             </li>

             <li>
             <a href="index.html"><i class="fa fa-user"></i> <span class="nav-label">Usuarios</span> <span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
             <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/usuarios/index.php">Control de Usuarios</a></li>
             </ul>            
             </li>
             </ul>
 </div>