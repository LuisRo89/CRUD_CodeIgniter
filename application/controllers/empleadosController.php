<?php 
    class empleadosController extends CI_Controller{

        public function __CONSTRUCT(){
            parent::__CONSTRUCT();
            $this->load->helper("url");
            $this->load->model("empleadosModel");
            $this->load->library("session");
        }

        public function index(){
            $empleados["listar"] = $this->empleadosModel->listar();
            $this->load->view("empleadosListarView",$empleados);
        }

        public function add(){
            $this->load->view("/empleadosAgregarView");
        }

        public function anadir(){
            if($this->input->post("submit"))
            $anadir = $this->empleadosModel->agregar(
                $this->input->post("Badge"),
                $this->input->post("DUI"),
                $this->input->post("Nombres"),
                $this->input->post("Apellidos")
            );
            if($anadir){
                $this->session->set_flashdata('correcto','Empleado agregado con exito!');
            }else{
                $this->session->set_flashdata('incorrecto','Empleado no fué agregado!');
            }
            $this->index();
        }

        public function modify(){
            $this->load->view("/empleadosModificarView");
        }

        public function update(){
            if($this->input->post("submit"))
            $mod = $this->empleadosModel->modificar(
                $this->input->post("id"),
                $this->input->post("Badge"),
                $this->input->post("DUI"),
                $this->input->post("Nombres"),
                $this->input->post("Apellidos")
            );
            if($mod){
                $this->session->set_flashdata('correcto','Registro Modificado con exito!');
            }else{
                $this->session->set_flashdata('incorrecto','Registro no fue Modificado!');
            }
            $this->index();
        }

        public function borrar(){
            $this->load->view("/empleadosEliminarView");
        }

        public function delete(){
            if($this->input->post("submit"))
            $id= $this->input->post("id");
            $del = $this->empleadosModel->eliminar(
                $this->input->post("id")                
            );
            if($del){
                $this->session->set_flashdata('correcto','Registro Eliminado con exito!');
            }else{
                $this->session->set_flashdata('incorrecto','Registro no fue Eliminado!');
            }
            $this->index();
        }  
        
    }


?>