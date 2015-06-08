<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admon extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $dato_titulo ['titulo'] = 'SAGTM - Administración';
        $this->load->view('menus/menu_admon_view',$dato_titulo);
        $this->load->view('menus/pie_view');
    }
}