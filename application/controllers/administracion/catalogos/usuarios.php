<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/usuario_model');
        $dato_titulo['titulo'] = 'Usuarios';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_usuarios() {
//        $datos_usuarios = $this->usuarios_model->listar_listar();
//        $data['usuarios'] = $datos_usuarios;
//        $this->load->view('administracion/catalogos/usuarios_lista_view', $data);
        $this->load->view('administracion/catalogos/usuarios_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_usuarios_inactivos() {
//        $datos_usuarios = $this->usuario_model->listar_usuarios_inactivos();
//        $data['usuarios'] = $datos_usuarios;
//        $this->load->view('administracion/catalogos/usuarios_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/usuarios_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_usuario() {

//        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_model->agregar_usuario();
//
//                $this->lista_usuarios();
//            } else {
//                $this->load->view('administracion/catalogos/usuario_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_agregar_view');
//        }
        $this->load->view('administracion/catalogos/usuario_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_usuario($idusuario) {
        public function editar_usuario() {
//        $this->form_validation->set_rules('usuario', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idusuario'] = $idusuario;
//
//        $data['usuario_por_id'] = $this->usuario_model->usuario_por_id($idusuario);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_model->editar_usuario($idusuario);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/usuarios/lista_usuarios');
//            } else {
//                $this->load->view('administracion/catalogos/usuario_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/usuario_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
