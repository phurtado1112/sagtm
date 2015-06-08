<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Agendados extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('catalogos/cargo_model');
        $dato_titulo['titulo'] = 'Agendados';
        $this->load->view('menus/menu_gestion_view', $dato_titulo);
    }

    public function index() {
        $this->load->view('menus/pie_view');
    }

}
