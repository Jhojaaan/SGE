<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="<?= URL_APP ?>views/img/plantilla/isotipoTL.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">SIT</span>
    </div>
    <!-- <a href="<?= URL_APP ?>inicio" class="brand-link">
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- <div class="user-panel d-flex">
            <a href="<?= URL_APP ?>inicio" class="d-block font-weight-bold">Trans Especiales El Samán</a>
        </div>
         -->
        <a href="<?= URL_APP ?>inicio">
            <div class="image text-center mt-4">
                <img src="<?= URL_APP ?>views/img/plantilla/logo.png" class="img-fluid img-circle elevation-2 w-50" alt="User Image">
            </div>
        </a>

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex">
            <!-- <div class="image">
                <img src="<?= URL_APP ?>views/img/plantilla/logo.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">El Saman</a>
            </div> -->
            <div class="info">
                <a href="<?= URL_APP ?>inicio" class="d-block font-weight-bold text-sm"><?= NOM_MENU ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Buscar">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- ===================================================
                    Listado de opciones del side bar
                =================================================== -->

                <!-- ===================================================
                    * Conceptos generales
                =================================================== -->
                <?php if (validarPermiso('M_GESTION_HUMANA', 'U') || validarPermiso('M_VEHICULAR', 'U')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Conceptos generales
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (validarPermiso('M_GESTION_HUMANA', 'U')) : ?>
                                <!-- ===================================================
                                        Gestión humana
                                    =================================================== -->
                                <li class="nav-item">
                                    <a href="cg-gestion-humana" class="nav-link" target="_blank">
                                        <i class="fas fa-user-friends nav-icon"></i>
                                        <p>Gestión humana</p>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if (validarPermiso('M_VEHICULAR', 'U')) : ?>
                                <!-- ===================================================
                                        Vehicular
                                    =================================================== -->
                                <li class="nav-item">
                                    <a href="cg-vehicular" class="nav-link" target="_blank">
                                        <i class="fas fa-bus-alt nav-icon"></i>
                                        <p>Vehicular</p>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                                <!-- ===================================================
                                    Mantenimiento
                                =================================================== -->
                                <li class="nav-item">
                                    <a href="cg-mantenimiento" class="nav-link" target="_blank">
                                        <i class="fas fa-tools nav-icon"></i>
                                        <p>Mantenimiento</p>
                                    </a>
                                </li>

                                <!-- ===================================================
                                    Seguridad
                                =================================================== -->
                                <li class="nav-item">
                                    <a href="cg-seguridad" class="nav-link" target="_blank">
                                        <i class="fas fa-shield-alt nav-icon"></i>
                                        <p>Seguridad</p>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    * Gestión Humana
                =================================================== -->
                <?php if (validarPermiso('M_ADMINISTRACION', 'R')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Administración
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- ===================================================
                                    Personal
                                =================================================== -->
                            <li class="nav-item">
                                <a href="a-profesores" class="nav-link" target="_blank">
                                    <i class="far fa-id-card nav-icon"></i>
                                    <p>Profesores</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Perfil sociodemográfico
                                =================================================== -->
                            <li class="nav-item">
                                <a href="gh-perfil-sd" class="nav-link" target="_blank">
                                    <i class="fas fa-chart-area nav-icon"></i>
                                    <p>Estudiantes</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Pago seguridad social
                                =================================================== -->
                            <li class="nav-item">
                                <a href="gh-pago-ss" class="nav-link" target="_blank">
                                    <i class="fas fa-file-invoice-dollar nav-icon"></i>
                                    <p>Pago seguridad social</p>
                                </a>
                            </li>

                            
                        </ul>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    * Vehicular
                =================================================== -->
                <?php if (validarPermiso('M_VEHICULAR', 'R')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>
                                Vehicular
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- ===================================================
                                    Bloqueo de vehículo
                                =================================================== -->
                            <li class="nav-item">
                                <a href="v-bloqueo-vehiculo" class="nav-link" target="_blank">
                                    <i class="fas fa-ban nav-icon"></i>
                                    <p>Bloqueo de vehículo</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Propietarios
                                =================================================== -->
                            <li class="nav-item">
                                <a href="v-propietarios" class="nav-link" target="_blank">
                                    <i class="fas fa-user-tie nav-icon"></i>
                                    <p>Propietarios</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Convenios a hora primero yo miro aca como es y ya luego  le hago en git
                                =================================================== -->
                            <li class="nav-item">
                                <a href="v-convenios" class="nav-link" target="_blank">
                                    <i class="fas fa-file-contract nav-icon"></i>
                                    <p>Convenios</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Vehículos
                                =================================================== -->
                            <li class="nav-item">
                                <a href="v-vehiculos" class="nav-link" target="_blank">
                                    <i class="fas fa-truck-pickup nav-icon"></i>
                                    <p>Vehículos</p>
                                </a>
                            </li>



                        </ul>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    * Contratos
                =================================================== -->
                <?php if (validarPermiso('M_CONTRATOS', 'R')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Contratos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <!-- ===================================================
                                    Clientes
                                =================================================== -->
                            <li class="nav-item">
                                <a href="contratos-clientes" class="nav-link" target="_blank">
                                    <i class="fas fa-user-tag nav-icon"></i>
                                    <p>Clientes</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Fijos
                                =================================================== -->
                            <li class="nav-item">
                                <a href="contratos-fijos" class="nav-link" target="_blank">
                                    <i class="fas fa-file-signature nav-icon"></i>
                                    <p>Fijos</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Cotizaciones
                                =================================================== -->
                            <li class="nav-item">
                                <a href="contratos-cotizaciones" class="nav-link" target="_blank">
                                    <i class="fas fa-comments-dollar nav-icon"></i>
                                    <p>Cotizaciones</p>
                                </a>
                            </li>

                            <!-- ===================================================
                                    Orden de servicio
                                =================================================== -->
                            <li class="nav-item">
                                <a href="contratos-ordenservicio" class="nav-link" target="_blank">
                                    <i class="fas fa-folder-plus nav-icon"></i>
                                    <p>Orden de servicio</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                <?php endif ?>


                <!-- ===================================================
                    * Operaciones
                =================================================== -->
                <?php if (validarPermiso('M_OPERACIONES', 'R')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-road"></i>
                            <p>
                                Operaciones
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- ===================================================
                                    FUEC
                                =================================================== -->
                            <li class="nav-item">
                                <a href="o-fuec" class="nav-link" target="_blank">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>FUEC</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Protocolo de Alistamiento
                                =================================================== -->
                            <li class="nav-item">
                                <a href="o-alistamiento" class="nav-link" target="_blank">
                                    <i class="fas fa-briefcase nav-icon"></i>
                                    <p>Protocolo de alistamiento</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Plan de Rodamiento
                                =================================================== -->
                            <li class="nav-item">
                                <a href="o-rodamiento" class="nav-link" target="_blank">
                                    <i class="fas fa-road nav-icon"></i>
                                    <p>Plan de rodamiento</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    * Control Usuarios
                =================================================== -->
                <?php if (validarPermiso('M_USUARIOS', 'R')) : ?>   
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Control de usuarios
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- ===================================================
                                    Usuarios
                                =================================================== -->
                            <li class="nav-item">
                                <a href="usuarios" class="nav-link" target="_blank">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Roles
                                =================================================== -->
                            <li class="nav-item">
                                <a href="roles-usuarios" class="nav-link" target="_blank">
                                    <i class="fas fa-users-cog nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** Mantenimiento
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Mantenimiento
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- ===================================================
                                    Mantenimientos
                                =================================================== -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-cogs nav-icon"></i>
                                    <p>Mantenimientos</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Proveedores
                                =================================================== -->
                            <li class="nav-item">
                                <a href="m-proveedores" class="nav-link" target="_blank">
                                    <i class="fas fa-cart-arrow-down nav-icon"></i>
                                    <p>Proveedores</p>
                                </a>
                            </li>
                            <!-- ===================================================
                                    Inventario
                                =================================================== -->
                            <li class="nav-item">
                                <a href="m-inventario" class="nav-link" target="_blank">
                                    <i class="fas fa-boxes nav-icon"></i>
                                    <p>Inventario</p>
                                </a>
                            </li>
                        

                            <!-- ===================================================
                                    Revison tecnomecánica 
                                =================================================== -->

                            <li class="nav-item">
                                <a href="m-revision-tm" class="nav-link" target="_blank">
                                    <i class="fas fa-wrench nav-icon"></i>
                                    <p>Revision TM</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                <?php endif ?>

                <!-- ===================================================
                    ** DOCUMENTOS CONTABLE
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Documentos Contable</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** COMERCIAL
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>Comercial</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** ESCOLAR
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Escolar</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** CONTRATOS FIJOS
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-contract"></i>
                            <p>Contratos Fijos</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** COMPRAS
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Compras</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** ESTANDAR PROCESOS DE CALIDAD
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>Estandar. procesos calidad</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** FORMATOS DE CALIDAD
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-check"></i>
                            <p>Formatos de calidad</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    ** Rastreo Satelital
                =================================================== -->
                <?php if (validarPermiso('M_OPCIONES', 'R')) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-map-marked-alt"></i>
                            <p>Rastreo Satelital</p>
                        </a>
                    </li>
                <?php endif ?>

                <!-- ===================================================
                    | Contratos (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>
                            Contratos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Cotizaciones
                            =================================================== -->
                        <li class="nav-item">
                            <a href="contratos-cotizaciones" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cotizaciones</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Orden de servicio
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Orden de servicio</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Servicios fijos
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Servicios fijos</p>
                            </a>
                        </li>

                        <!-- ===================================================
                                Clientes
                            =================================================== -->
                        <li class="nav-item">
                            <a href="contratos-clientes" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>

                        <!-- ===================================================
                                Fijos
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fijos</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ===================================================
                    | Gestión Operaciones (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Gestión Operaciones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Bloqueo de personal
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bloqueo de personal</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Bloqueo de vehículo
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bloqueo de vehículo</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Propietarios
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Propietarios</p>
                            </a>
                        </li>

                        <!-- ===================================================
                                Convenios a hora primero yo miro aca como es y ya luego  le hago en git
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Convenios</p>
                            </a>
                        </li>

                        <!-- ===================================================
                                Vehículos
                            =================================================== -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vehículos...........</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ===================================================
                    | Operaciones (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>
                            Operaciones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Plan de actividades
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Plan de actividades</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Programación Servicios
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Programación Servicios</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                FUEC
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FUEC</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ===================================================
                    | Sistema de Gestión (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Sistema de Gestión
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Alertas Exámenes Ocupacionales
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alertas Exámenes Ocupacionales</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Reporte Completo Documentos
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Completo Documentos</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Vencimiento de licencias
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vencimiento de licencias</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Control de infractores
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Control de infractores</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                PQR
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PQR</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Capacitaciones
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Capacitaciones</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Programa Capacitaciones
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Programa Capacitaciones</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Seguridad y salud en el trabajo
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Seguridad y salud en el trabajo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ===================================================
                    | Control Valeras (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Control Valeras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Programación
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Programación</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Entrega de Valeras
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entrega de Valeras</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Ingreso de recibos
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ingreso de recibos</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ===================================================
                    | Informes (OCULTO TEMPORALMENTE)
                =================================================== -->
                <li class="nav-item has-treeview d-none">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Informes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- ===================================================
                                Informes Fuec
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informes Fuec</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Consolidado Fuec
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consolidado Fuec</p>
                            </a>
                        </li>
                        <!-- ===================================================
                                Búsqueda Fuec
                            =================================================== -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Búsqueda Fuec</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>