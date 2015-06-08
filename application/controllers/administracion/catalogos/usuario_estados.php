<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario_estados extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/usuario_estado_model');
        $dato_titulo['titulo'] = 'Estado Usuario';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_usuarios_estados() {
//        $datos_usuario_estado_estados = $this->usuario_estado_estados_model->listar_listar();
//        $data['usuario_estado_estados'] = $datos_usuario_estado_estados;
//        $this->load->view('administracion/catalogos/usuario_estado_estados_lista_view', $data);
        $this->load->view('administracion/catalogos/usuario_estados_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_usuario_estado_estados_inactivos() {
//        $datos_usuario_estado_estados = $this->usuario_estado_model->listar_usuario_estado_estados_inactivos();
//        $data['usuario_estado_estados'] = $datos_usuario_estado_estados;
//        $this->load->view('administracion/catalogos/usuario_estado_estados_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/usuario_estado_estados_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_usuario_estado() {

//        $this->form_validation->set_rules('usuario_estado', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_estado_model->agregar_usuario_estado();
//
//                $this->lista_usuario_estado_estados();
//            } else {
//                $this->load->view('administracion/catalogos/usuario_estado_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_estado_agregar_view');
//        }
        $this->load->view('administracion/catalogos/usuario_estado_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_usuario_estado($idusuario_estado) {
        public function editar_usuario_estado() {
//        $this->form_validation->set_rules('usuario_estado', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idusuario_estado'] = $idusuario_estado;
//
//        $data['usuario_estado_por_id'] = $this->usuario_estado_model->usuario_estado_por_id($idusuario_estado);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_estado_model->editar_usuario_estado($idusuario_estado);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/usuario_estado_estados/lista_usuario_estado_estados');
//            } else {
//                $this->load->view('administracion/catalogos/usuario_estado_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_estado_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/usuario_estado_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
