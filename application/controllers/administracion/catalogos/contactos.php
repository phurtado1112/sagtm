<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contactos extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/contacto_model');
        $dato_titulo['titulo'] = 'Contactos';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_contactos() {
//        $datos_contactos = $this->contactos_model->listar_listar();
//        $data['contactos'] = $datos_contactos;
//        $this->load->view('administracion/catalogos/contactos_lista_view', $data);
        $this->load->view('administracion/catalogos/contactos_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_contactos_inactivos() {
//        $datos_contactos = $this->contacto_model->listar_contactos_inactivos();
//        $data['contactos'] = $datos_contactos;
//        $this->load->view('administracion/catalogos/contactos_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/contactos_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_contacto() {

//        $this->form_validation->set_rules('contacto', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_model->agregar_contacto();
//
//                $this->lista_contactos();
//            } else {
//                $this->load->view('administracion/catalogos/contacto_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_agregar_view');
//        }
        $this->load->view('administracion/catalogos/contacto_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_contacto($idcontacto) {
        public function editar_contacto() {
//        $this->form_validation->set_rules('contacto', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idcontacto'] = $idcontacto;
//
//        $data['contacto_por_id'] = $this->contacto_model->contacto_por_id($idcontacto);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->contacto_model->editar_contacto($idcontacto);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/contactos/lista_contactos');
//            } else {
//                $this->load->view('administracion/catalogos/contacto_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/contacto_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/contacto_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
