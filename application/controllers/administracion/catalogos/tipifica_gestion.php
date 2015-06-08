<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Tipifica_gestion extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/tipifica_gestion_model');
        $dato_titulo['titulo'] = 'Tipificación';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_tipifica_gestion() {
//        $datos_tipifica_gestiones = $this->tipifica_gestiones_model->listar_listar();
//        $data['tipifica_gestiones'] = $datos_tipifica_gestiones;
//        $this->load->view('administracion/catalogos/tipifica_gestiones_lista_view', $data);
        $this->load->view('administracion/catalogos/tipifica_gestion_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_tipifica_gestiones_inactivos() {
//        $datos_tipifica_gestiones = $this->tipifica_gestion_model->listar_tipifica_gestiones_inactivos();
//        $data['tipifica_gestiones'] = $datos_tipifica_gestiones;
//        $this->load->view('administracion/catalogos/tipifica_gestiones_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/tipifica_gestiones_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_tipifica_gestion() {

//        $this->form_validation->set_rules('tipifica_gestion', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->tipifica_gestion_model->agregar_tipifica_gestion();
//
//                $this->lista_tipifica_gestiones();
//            } else {
//                $this->load->view('administracion/catalogos/tipifica_gestion_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/tipifica_gestion_agregar_view');
//        }
        $this->load->view('administracion/catalogos/tipifica_gestion_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_tipifica_gestion($idtipifica_gestion) {
        public function editar_tipifica_gestion() {
//        $this->form_validation->set_rules('tipifica_gestion', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idtipifica_gestion'] = $idtipifica_gestion;
//
//        $data['tipifica_gestion_por_id'] = $this->tipifica_gestion_model->tipifica_gestion_por_id($idtipifica_gestion);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->tipifica_gestion_model->editar_tipifica_gestion($idtipifica_gestion);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/tipifica_gestiones/lista_tipifica_gestiones');
//            } else {
//                $this->load->view('administracion/catalogos/tipifica_gestion_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/tipifica_gestion_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/tipifica_gestion_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
