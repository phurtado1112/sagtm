<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario_tipos extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/usuario_tipo_model');
        $dato_titulo['titulo'] = 'Tipo Usuario';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_usuarios_tipos() {
//        $datos_usuario_tipo_tipos = $this->usuario_tipo_tipos_model->listar_listar();
//        $data['usuario_tipo_tipos'] = $datos_usuario_tipo_tipos;
//        $this->load->view('administracion/catalogos/usuario_tipo_tipos_lista_view', $data);
        $this->load->view('administracion/catalogos/usuario_tipos_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_usuario_tipo_tipos_inactivos() {
//        $datos_usuario_tipo_tipos = $this->usuario_tipo_model->listar_usuario_tipo_tipos_inactivos();
//        $data['usuario_tipo_tipos'] = $datos_usuario_tipo_tipos;
//        $this->load->view('administracion/catalogos/usuario_tipo_tipos_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/usuario_tipo_tipos_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_usuario_tipo() {

//        $this->form_validation->set_rules('usuario_tipo', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_tipo_model->agregar_usuario_tipo();
//
//                $this->lista_usuario_tipo_tipos();
//            } else {
//                $this->load->view('administracion/catalogos/usuario_tipo_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_tipo_agregar_view');
//        }
        $this->load->view('administracion/catalogos/usuario_tipo_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_usuario_tipo($idusuario_tipo) {
        public function editar_usuario_tipo() {
//        $this->form_validation->set_rules('usuario_tipo', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idusuario_tipo'] = $idusuario_tipo;
//
//        $data['usuario_tipo_por_id'] = $this->usuario_tipo_model->usuario_tipo_por_id($idusuario_tipo);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->usuario_tipo_model->editar_usuario_tipo($idusuario_tipo);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/usuario_tipo_tipos/lista_usuario_tipo_tipos');
//            } else {
//                $this->load->view('administracion/catalogos/usuario_tipo_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/usuario_tipo_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/usuario_tipo_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
