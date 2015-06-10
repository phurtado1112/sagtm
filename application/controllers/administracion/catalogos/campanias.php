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

    public function campanias_lista() {
//        $datos_campanias = $this->campanias_model->listar_listar();
//        $data['campanias'] = $datos_campanias;
//        $this->load->view('administracion/catalogos/campanias_lista_view', $data);
        $this->load->view('administracion/catalogos/campanias_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function campanias_inactivas_lista() {
//        $datos_campanias = $this->campania_model->listar_campanias_inactivos();
//        $data['campanias'] = $datos_campanias;
//        $this->load->view('administracion/catalogos/campanias_lista_inactivos_view', $data);
        $this->load->view('administracion/catalogos/campanias_inactivas_lista_view');
        $this->load->view('menus/pie_view');
    }

    public function campania_agregar() {

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
        $this->load->view('menus/pie_fecha_view');
    }

//    public function editar_campania($idcampania) {
        public function campania_editar() {
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
        $this->load->view('menus/pie_fecha_view');
    }

    public function campania_cerrar() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }

    public function campania_abrir() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }
    
    public function campania_eliminar() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }
    
    public function campania_asignar() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }
    
    public function campania_reasignar() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }
    
    public function campania_carga_contactos() {
        $this->load->view('administracion/catalogos/campanias_lista_view'); //se debe eliminar cuando se haga el acceso a datos
        $this->load->view('menus/pie_view');
    }
}
