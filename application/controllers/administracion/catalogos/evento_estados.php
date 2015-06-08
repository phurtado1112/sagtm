<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Evento_estados extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/evento_estado_model');
        $dato_titulo['titulo'] = 'Estado Evento';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_evento_estados() {
//        $datos_evento_estados = $this->evento_estados_model->listar_listar();
//        $data['evento_estados'] = $datos_evento_estados;
//        $this->load->view('administracion/catalogos/evento_estados_lista_view', $data);
        $this->load->view('administracion/catalogos/evento_estados_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_evento_estados_inactivos() {
//        $datos_evento_estados = $this->evento_estado_model->listar_evento_estados_inactivos();
//        $data['evento_estados'] = $datos_evento_estados;
//        $this->load->view('administracion/catalogos/evento_estados_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/evento_estados_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_evento_estado() {

//        $this->form_validation->set_rules('evento_estado', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->evento_estado_model->agregar_evento_estado();
//
//                $this->lista_evento_estados();
//            } else {
//                $this->load->view('administracion/catalogos/evento_estado_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/evento_estado_agregar_view');
//        }
        $this->load->view('administracion/catalogos/evento_estado_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_evento_estado($idevento_estado) {
        public function editar_evento_estado() {
//        $this->form_validation->set_rules('evento_estado', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idevento_estado'] = $idevento_estado;
//
//        $data['evento_estado_por_id'] = $this->evento_estado_model->evento_estado_por_id($idevento_estado);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->evento_estado_model->editar_evento_estado($idevento_estado);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/evento_estados/lista_evento_estados');
//            } else {
//                $this->load->view('administracion/catalogos/evento_estado_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/evento_estado_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/evento_estado_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
