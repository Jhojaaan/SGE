<?php


class ControladorProfesores{

    /* ===================================================
        AGREGAR EDITAR PROFESOR
    ===================================================*/
    static public function ctrAgregarEditarProfesor($datos)
    {
        if($datos['idProfesor'] != ""){
            //ACTUALIZA
            $respuesta = ModeloProfesores::mdlActualizar($datos);
            return $respuesta;
        }else{
            //CREA
            $respuesta = ModeloProfesores::mdlAgregar($datos);
            return $respuesta;
        }
    }

}
