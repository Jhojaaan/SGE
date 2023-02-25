<?php

// INCLUIMOS LA CONFIGURACIÓN Y LA CONEXION PARA EL FUNCIONAMIENTO DEL PROYECTO
include_once DIR_APP . 'config/conexion.php';

class ModeloProfesores{

    /* ===================================================
        AGREGAR PROFESOR
    ===================================================*/
    static public function mdlAgregar($datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO a_profesores(nombre,documento,especialidad,experiencia,institucion,salario) VALUES(:nombre,:documento,:especialidad,:experiencia,:institucion,:salario)");

        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos['documento'], PDO::PARAM_STR);
        $stmt->bindParam(":especialidad", $datos['especialidad'], PDO::PARAM_STR);
        $stmt->bindParam(":experiencia", $datos['experiencia'], PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datos['institucion'], PDO::PARAM_STR);
        $stmt->bindParam(":salario", $datos['salario'], PDO::PARAM_STR);


        if($stmt->execute()) $retorno = 'ok';
        else $retorno = 'error';

        $stmt->closeCursor();
        $stmt = null;

        return $retorno;
    

    }

    /* ===================================================
        TABLA DE PROFESORES
    ===================================================*/
    static public function mdlTabla()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM a_profesores WHERE estado = 1");

        $stmt->execute();
        $retorno = $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt = null;

        return $retorno;
    }

    static public function mdlDatosProfesorxId($idProfesor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM a_profesores WHERE idProfesor = :idProfesor");

        $stmt->bindParam(":idProfesor", $idProfesor, PDO::PARAM_INT);

        $stmt->execute();
        $retorno = $stmt->fetch();
        $stmt->closeCursor();
        $stmt = null;

        return $retorno;
    }

    static public function mdlActualizar($datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE a_profesores SET nombre = :nombre, documento = :documento, especialidad = :especialidad, experiencia = :experiencia, institucion = :institucion, salario = :salario
        WHERE idProfesor = :idProfesor");

        $stmt->bindParam(":idProfesor", $datos['idProfesor'], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos['documento'], PDO::PARAM_STR);
        $stmt->bindParam(":especialidad", $datos['especialidad'], PDO::PARAM_STR);
        $stmt->bindParam(":experiencia", $datos['experiencia'], PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datos['institucion'], PDO::PARAM_STR);
        $stmt->bindParam(":salario", $datos['salario'], PDO::PARAM_STR);


        if($stmt->execute()) $retorno = 'ok';
        else $retorno = 'error';

        $stmt->closeCursor();
        $stmt = null;

        return $retorno;
    }


}