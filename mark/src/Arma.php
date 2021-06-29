<?php

namespace Medieval;

class Arma{
    private $config;
    private $cn = null;

    public function __construct(){
        $this->config= parse_ini_file(__DIR__.'/../config.ini');
        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
    }

    public function registrar($_params){
        $sql = "INSERT INTO `armas`(`titulo`, `descripcion`, `foto`, `precio`, `tipo_id`, `fecha`) 
        VALUES (:titulo,:descripcion,:foto,:precio,:tipo_id,:fecha)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":tipo_id" => $_params['tipo_id'],
            ":fecha" => $_params['fecha'],
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    public function actualizar($_params){
        $sql = "UPDATE `armas` SET `titulo`=:titulo,`descripcion`=:descripcion,`foto`=:foto,`precio`=:precio,`tipo_id`=:tipo_id,`fecha`=:fecha  WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":tipo_id" => $_params['tipo_id'],
            ":fecha" => $_params['fecha'],
            ":id" =>  $_params['id'],
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    public function eliminar($id){
        $sql = "DELETE FROM `armas` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    public function mostrar(){
        $sql ='SELECT armas.id,titulo,descripcion,foto,nombre,precio,fecha,estado FROM armas 
        INNER JOIN tipos
        ON armas.tipo_id = tipos.id ORDER BY armas.id DESC
        ';
        $resultado = $this -> cn->prepare($sql);    

        if($resultado->execute())
            return $resultado->fetchAll();

            return false;
    }
    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM `armas` WHERE `id`=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }

}

?>