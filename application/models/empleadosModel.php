<?php 
//se crea una clase de modelo, la cual extendera de CI_Model
class empleadosModel extends CI_Model {
    //metodo para iniciar el constructor quien conecta a la base de datos
    public function __CONSTRUCT(){
        //parent del constructor
        parent::__CONSTRUCT();
        //se carga la base de datos asignada en database.php
        $this->load->database();
    }
    //metodo para mostrar todos los registros
    public function listar(){
        //se consulta 
        $consulta = $this->db->query("SELECT * FROM empleados");
        //y se retorna el resultado
        return $consulta->result();
    }
    //metodo para agregar un nuevo registro, se le pasan los datos de las columnas pertinentes
    public function agregar($Badge,$DUI,$Nombres,$Apellidos){
        //se genera la consulta hacia la base de datos
        $consulta = $this->db->query("INSERT INTO `empleados`(`Badge`, `DUI`, `Nombres`, `Apellidos`) VALUES ('$Badge','$DUI','$Nombres','$Apellidos')");
        //se validad la respuesta del host local
        if($consulta==true){
            //de ser efectiva la consulta, devuelve TRUE
            return true;
        }else{
            //por el contrario, se devuelve FALSE
            return false;
        }
    }
    //metodo para modificar un registro existente
    public function modificar($id,$Badge,$DUI,$Nombres,$Apellidos){
        //se consulta
        $consulta = $this->db->query("UPDATE `empleados` SET `Badge`='$Badge',`DUI`='$DUI',
        `Nombres`='$Nombres',`Apellidos`='$Apellidos' WHERE `id`='$id'");
        //se validad la respuesta del host local
        if($consulta==true){
            return true;
        }else{
            return false;
        }
    }    

    public function eliminar($id){
        //se consulta
        $consulta = $this->db->query("DELETE FROM `empleados` WHERE `empleados`.`id` = '$id'");
        //se validad la respuesta del host local
        if($consulta==true){
            //de ser efectiva la consulta, devuelve TRUE
            return true;
        }else{
            //por el contrario, se devuelve FALSE
            return false;
        }
    }    
}

?>