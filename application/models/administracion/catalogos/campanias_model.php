<?php

/*
 * Inicio 2015-04-17 PHD
 */

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listar_usuarios() {
        $lista_usuarios = $this->db->query('select idusuario, nombres, apellidos, usuario, cargo, tipo from usuarios_view where estado > 0');

        if ($lista_usuarios->num_rows() > 0) {
            $filas_usuarios = $lista_usuarios->result();
            return $filas_usuarios;
        } else {
            return FALSE;
        }
    }
    
    public function agregar_usuario() {
        $form_data = $this->input->post();
        unset($form_data['botonSubmit']);
        
        $this->db->insert('usuarios',$form_data);
    }

//    function login($usuario, $contrasenia) {
//        $this->db->select('idusuario, usuario, contrasenia');
//        $this->db->from('usuarios');
//        $this->db->where('usuario', $usuario);
//        $this->db->where('contrasenia', sha1($contrasenia));
//        $this->db->limit(1);
//
//        $query = $this->db->get();
//
//        if ($query->num_rows() == 1) {
//            return $query->result();
//        } else {
//            return false;
//        }
//    }
//
//    public function agregar_usuario() {
//
//        $form_data = $this->input->post();
//        unset($form_data['botonSubmit']);
//
//        $this->db->insert('usuarios', $form_data);
//    }
//
//    public function encontrar_usuario_por_id($idusuario = NULL) {
//        if ($idusuario != NULL) {
//
//            $query = $this->db->where('idusuario', $idusuario);
//            $query = $this->db->get('usuarios_view');
//        }
//        return $query->result_array();
//    }
//
//    public function leer_usuario($estado) {
//
//        if ($estado == 0 || $estado == 1) {
//            $query = $this->db->query('SELECT idusuario,nombres,apellidos, usuario, cargo, tipo FROM usuarios_view WHERE estado=' . $estado . '');
//        }
//        return $query->result_array();
//    }
//
//    public function modificar_usuario($idusuario) {
//        $form_data = $this->input->post();
//        unset($form_data['botonSubmit']);
//
//        $this->db->where('idusuario', $idusuario);
//        $this->db->update('usuario_model', $form_data);
//    }
//
//    public function cambiar_estado($idusuario, $estado) {
//
//        $this->db->query('UPDATE usuarios SET estado=' . $estado . ' WHERE idusuario=' . $idusuario);
//    }
}
