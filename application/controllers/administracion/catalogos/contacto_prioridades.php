<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contacto_prioridades extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/contacto_prioridade_model');
        $dato_titulo['titulo'] = 'Prioridades Contacto';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_contacto_prioridades() {
//        $datos_contacto_prioridades = $this->contacto_prioridades_model->listar_listar();
//        $data['contacto_prioridades'] = $datos_contacto_prioridades;
//        $this->load->view('administracion/catalogos/contacto_prioridades_lista_view', $data);
        $this->load->view('administracion/catalogos/contacto_prioridades_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_contacto_prioridades_inactivos() {
//        $datos_contacto_prioridades = $this->contacto_prioridade_model->listar_contacto_prioridades_inactivos();
//        $data['contacto_prioridades'] = $datos_contacto_prioridades;
//        $this->load->view('administracion/catalogos/contacto_prioridades_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/contacto_prioridades_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_contacto_prioridade() {

//        $this->form_validation->set_rules('contacto_prioridade', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_prioridade_model->agregar_contacto_prioridade();
//
//                $this->lista_contacto_prioridades();
//            } else {
//                $this->load->view('administracion/catalogos/contacto_prioridade_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_prioridade_agregar_view');
//        }
        $this->load->view('administracion/catalogos/contacto_prioridade_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_contacto_prioridade($idcontacto_prioridade) {
        public function editar_contacto_prioridade() {
//        $this->form_validation->set_rules('contacto_prioridade', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idcontacto_prioridade'] = $idcontacto_prioridade;
//
//        $data['contacto_prioridade_por_id'] = $this->contacto_prioridade_model->contacto_prioridade_por_id($idcontacto_prioridade);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_prioridade_model->editar_contacto_prioridade($idcontacto_prioridade);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/contacto_prioridades/lista_contacto_prioridades');
//            } else {
//                $this->load->view('administracion/catalogos/contacto_prioridade_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_prioridade_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/contacto_prioridade_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
