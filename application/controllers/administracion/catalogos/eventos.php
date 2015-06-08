<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Eventos extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('administracion/catalogos/evento_model');
        $dato_titulo['titulo'] = 'Eventos';
        $this->load->view('menus/menu_admon_view', $dato_titulo);
    }

    public function index() {
        
    }

    public function lista_eventos() {
//        $datos_eventos = $this->eventos_model->listar_listar();
//        $data['eventos'] = $datos_eventos;
//        $this->load->view('administracion/catalogos/eventos_lista_view', $data);
        $this->load->view('administracion/catalogos/eventos_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function lista_eventos_inactivos() {
//        $datos_eventos = $this->evento_model->listar_eventos_inactivos();
//        $data['eventos'] = $datos_eventos;
//        $this->load->view('administracion/catalogos/eventos_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/eventos_lista_inactivos_view');
        $this->load->view('menus/pie_view');
    }

    public function agregar_evento() {

//        $this->form_validation->set_rules('evento', 'Usuario', 'trim|required|xss_clean');

//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->evento_model->agregar_evento();
//
//                $this->lista_eventos();
//            } else {
//                $this->load->view('administracion/catalogos/evento_agregar_view');
//            }
//        } else {
//            $this->load->view('administracion/catalogos/evento_agregar_view');
//        }
        $this->load->view('administracion/catalogos/evento_agregar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

//    public function editar_evento($idevento) {
        public function editar_evento() {
//        $this->form_validation->set_rules('evento', 'Cargo', 'trim|required|xss_clean');
//
//        $data['idevento'] = $idevento;
//
//        $data['evento_por_id'] = $this->evento_model->evento_por_id($idevento);
//
//        if ($this->input->post()) {
//
//            if ($this->form_validation->run() == TRUE) {
//                $this->evento_model->editar_evento($idevento);
//                header('Location:' . base_url() .'index.php/administracion/catalogos/eventos/lista_eventos');
//            } else {
//                $this->load->view('administracion/catalogos/evento_editar_view', $data);
//            }
//        } else {
//            $this->load->view('administracion/catalogos/evento_editar_view', $data);
//        }
        $this->load->view('administracion/catalogos/evento_editar_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

}
