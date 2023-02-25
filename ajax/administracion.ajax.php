<?php

# IMPORTAMOS LA CONFIGURACION DE LA SESSION
include '../config/config.php';
# REQUERIMOS EL CONTROLADOR Y EL MODELO PARA QUE REALICE LA PETICION
require_once '../controllers/administracion.controlador.php';
require_once '../models/administracion.modelo.php';


/**
 * 
 */

if (!isset($_SESSION['iniciarSesion']) || $_SESSION['iniciarSesion'] != "ok") {
	echo "<script>window.location = 'inicio';</script>";
	die();
}


class AjaxProfesores{

    /* ===================================================
        AGREGAR/EDITAR PROFESOR
    ===================================================*/
    static public function ajaxAgregarEditarProfesor($datos)
    {
        $respuesta = ControladorProfesores::ctrAgregarEditarProfesor($datos);
        echo $respuesta;
    }

    /* ===================================================
        TABLA PROFESORES
    ===================================================*/
    static public function ajaxTabla()
    {
        $datos = ModeloProfesores::mdlTabla();
        $tr = "";

        if($datos != false){

            foreach ($datos as $key => $value) {
                $tr .= "<tr>
                <td>
                <div class='btn-group'>
                <button type='button' class='btn bg-gradient-info btn-sm btn-editarProfesor' data-toggle='modal' data-target='#modal-nuevoprofesor' idProfesor='{$value['idProfesor']}' title='Editar datos del profesor'><i class='fas fa-edit'></i></button>
                <div class='btn-group'>
                    <button type='button' class='btn bg-gradient-gray dropdown-toggle dropdown-icon' data-toggle='dropdown' aria-expanded='false'>
                    </button>
                        <div class='dropdown-menu'>
                            <a class='dropdown-item btnDocumentos'  data-toggle='modal' data-target='#PersonalDocumentos' href='#'>Eliminar</a>
                            
                        </div>
                </div>
            </div>
                
                </td>
                    <td>{$value["nombre"]}</td>
                    <td>{$value["documento"]}</td>
                    <td>{$value["especialidad"]}</td>
                    <td>{$value["experiencia"]}</td>
                    <td>{$value["institucion"]}</td>
                    <td>{$value["salario"]}</td>
                
                </tr>";
            }

        }

        echo $tr;
    }

    /* ===================================================
        TRAER DATOS DEL PROFESOR X ID
    ===================================================*/
    static public function ajaxDatosProfesorxId($idProfesor)
    {
        $respuesta = ModeloProfesores::mdlDatosProfesorxId($idProfesor);
        echo json_encode($respuesta);
    }

}

#Llamado a agregar / editar profesor
if (isset($_POST['GuardarEditarProfesor']) && $_POST['GuardarEditarProfesor'] == 'ok') AjaxProfesores::ajaxAgregarEditarProfesor($_POST);

#Llamado a tabla de profesores
if (isset($_POST['TablaProfesores']) && $_POST['TablaProfesores'] == "ok") AjaxProfesores::ajaxTabla();

#Llamado a datos de profesore x el id 
if (isset($_POST['DatosProfesorxId']) && $_POST['DatosProfesorxId'] == "ok") AjaxProfesores::ajaxDatosProfesorxId($_POST['idProfesor']);