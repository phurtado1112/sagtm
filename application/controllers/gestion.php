<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gestion extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    $dato_titulo ['titulo'] = 'SAGTM';
//        if ($this->session->userdata('logged_in')) {
//            $session_data = $this->session->userdata('logged_in');
//            $data['usuario'] = $session_data['usuario'];
//            $this->load->view('plantillas/menu_view', $data);
        $this->load->view('menus/menu_gestion_view',$dato_titulo);
        $this->load->view('menus/pie_view');
//        } else {
//            redirect('login', 'refresh');
//        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

}
