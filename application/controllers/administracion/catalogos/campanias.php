<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Campanias extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/campania_model');
        $dato_titulo['titulo'] = 'Campañas';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_campanias() {
//        $datos_campanias = $this->campanias_model->listar_listar();
//        $data['campanias'] = $datos_campanias;
//        $this->load->view('administracion/catalogos/campanias_lista_view', $data);
        $this->load->view('administracion/catalogos/campanias_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_campanias_inactivos() {
//        $datos_campanias = $this->campania_model->listar_campanias_inactivos();
//        $data['campanias'] = $datos_campanias;
//        $this->load->view('administracion/catalogos/campanias_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/campanias_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_campania() {

//        $this->form_validation->set_rules('campania', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->campania_model->agregar_campania();
//
//                $this->lista_campanias();
//            } else {
//                $this->load->view('administracion/catalogos/campania_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/campania_agregar_view');
//        }
        $this->load->view('administracion/catalogos/campania_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_campania($idcampania) {
        public function editar_campania() {
//        $this->form_validation->set_rules('campania', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idcampania'] = $idcampania;
//
//        $data['campania_por_id'] = $this->campania_model->campania_por_id($idcampania);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->campania_model->editar_campania($idcampania);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/campanias/lista_campanias');
//            } else {
//                $this->load->view('administracion/catalogos/campania_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/campania_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/campania_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
