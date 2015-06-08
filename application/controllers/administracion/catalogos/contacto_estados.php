<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contacto_estados extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/contacto_estado_model');
        $dato_titulo['titulo'] = 'Estados Contacto';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_contacto_estados() {
//        $datos_contacto_estados = $this->contacto_estados_model->listar_listar();
//        $data['contacto_estados'] = $datos_contacto_estados;
//        $this->load->view('administracion/catalogos/contacto_estados_lista_view', $data);
        $this->load->view('administracion/catalogos/contacto_estados_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_contacto_estados_inactivos() {
//        $datos_contacto_estados = $this->contacto_estado_model->listar_contacto_estados_inactivos();
//        $data['contacto_estados'] = $datos_contacto_estados;
//        $this->load->view('administracion/catalogos/contacto_estados_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/contacto_estados_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_contacto_estado() {

//        $this->form_validation->set_rules('contacto_estado', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_estado_model->agregar_contacto_estado();
//
//                $this->lista_contacto_estados();
//            } else {
//                $this->load->view('administracion/catalogos/contacto_estado_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_estado_agregar_view');
//        }
        $this->load->view('administracion/catalogos/contacto_estado_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_contacto_estado($idcontacto_estado) {
        public function editar_contacto_estado() {
//        $this->form_validation->set_rules('contacto_estado', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idcontacto_estado'] = $idcontacto_estado;
//
//        $data['contacto_estado_por_id'] = $this->contacto_estado_model->contacto_estado_por_id($idcontacto_estado);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_estado_model->editar_contacto_estado($idcontacto_estado);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/contacto_estados/lista_contacto_estados');
//            } else {
//                $this->load->view('administracion/catalogos/contacto_estado_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_estado_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/contacto_estado_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
