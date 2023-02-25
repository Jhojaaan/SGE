<?php

if (!validarPermiso('M_ADMINISTRACION', 'R')) {
    echo "<script> window.location = '" . URL_APP . "'; </script>";
}




?>
<!-- ===================== 
  MODELO PARA LA IMPLEMENTARCION EN EL DISEÑO DE LOS MODULOS
  ESTRUCTURA 
========================= -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark "><b><i>Profesores <i class="fas fa-chalkboard-teacher"></i></i></b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Profesores</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <hr class="my-4">
            <div class="row">
                <div class="col-12">
                    <?php if (validarPermiso('M_ADMINISTRACION', 'C')) : ?>
                        <button type="button" class="btn bg-gradient-success btn-nuevorol" data-toggle="modal" data-target="#modal-nuevoprofesor"><i class="fas fa-user-plus"></i> Nuevo Profesor</button>
                    <?php endif ?>
                </div>
            </div>
            <!-- ===================== 
              AGREGAR FILAS Y COLUMNAS PARA EL DESARROLLO 
            ========================= -->
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card card-outline card-success">
                            <div class="card-body">
                                <!--|||TABLA CONTROLES DE LOS ROLES|||-->
                                <div class="table-responsive">
                                    <table id="tablaProfesores" class="table table-bordered table-striped text-center nowrap ">
                                        <thead>
                                            <tr>
                                                <th>Acciones</th>
                                                <th>Nombre</th>
                                                <th>Cedula</th>
                                                <th>Especialidad</th>
                                                <th>Experiencia</th>
                                                <th>Institución</th>
                                                <th>Salario</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tbodyProfesores">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- ==============================
  MODAL DE PERMISOS DEL ROL
 ============================== -->

<div class="modal fade show" id="modal-nuevoprofesor" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h4 class="modal-title"><b><i>Agregar nuevo profesor</i></b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="card-body">
                    <form id="profesores_form" method="post">
                        <input type="hidden" name="idProfesor" id="idProfesor" value="">

                        <div class="row">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <!-- <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input id="nombre" class="form-control" type="text" name="nombre">
                                        </div> -->

                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa-regular fa-user"></i>
                                                    </span>
                                                </div>
                                                <input id="nombre" class="form-control" type="text" placeholder="Ingrese el nombre del nuevo profesor" name="nombre">

                                            </div>
                                        </div>

                                    </div>



                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <label for="documento">Documento</label>
                                            <input id="documento" class="form-control" type="text" name="documento">
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <label for="especialidad">Especialidad</label>
                                            <input id="especialidad" class="form-control" type="text" name="especialidad">
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <label for="experiencia">Experiencia</label>
                                            <input id="experiencia" class="form-control" type="text" name="experiencia">
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <label for="institucion">Institución</label>
                                            <input id="institucion" class="form-control" type="text" name="institucion">
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <label for="salario">Salario</label>
                                            <input id="salario" class="form-control" type="text" name="salario">
                                        </div>

                                    </div>
                                </div>

                                <!-- ====================================
                                    FALTA EL TIPO DE CONTRATACION 
                                    REVISAR ESE TEMA
                                ====================================== -->
                            </div>
                        </div>

                    </form>


                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" form="profesores_form" class="btn btn-success" id=""><i class="far fa-check-circle"></i> Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- <script src="<?= URL_APP ?>views/js/administracion/a-profesores.js?v=<?= time() ?>"></script> -->