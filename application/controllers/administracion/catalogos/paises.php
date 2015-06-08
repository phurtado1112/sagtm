<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Paises extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/pais_model');
        $dato_titulo['titulo'] = 'Paises';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_paises() {
//        $datos_paises = $this->paises_model->listar_listar();
//        $data['paises'] = $datos_paises;
//        $this->load->view('administracion/catalogos/paises_lista_view', $data);
        $this->load->view('administracion/catalogos/paises_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_paises_inactivos() {
//        $datos_paises = $this->pais_model->listar_paises_inactivos();
//        $data['paises'] = $datos_paises;
//        $this->load->view('administracion/catalogos/paises_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/paises_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_pais() {

//        $this->form_validation->set_rules('pais', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->pais_model->agregar_pais();
//
//                $this->lista_paises();
//            } else {
//                $this->load->view('administracion/catalogos/pais_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/pais_agregar_view');
//        }
        $this->load->view('administracion/catalogos/pais_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_pais($idpais) {
        public function editar_pais() {
//        $this->form_validation->set_rules('pais', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idpais'] = $idpais;
//
//        $data['pais_por_id'] = $this->pais_model->pais_por_id($idpais);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->pais_model->editar_pais($idpais);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/paises/lista_paises');
//            } else {
//                $this->load->view('administracion/catalogos/pais_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/pais_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/pais_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
