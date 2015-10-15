<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrator_model
 *
 * @author VMC-D02
 */
class Administrador_model extends CI_Model{
    //put your code here
    private static $_table = "cm_administrador";
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function validateUsuario($correo, $clave){
        $where                  = array();
        $where['adm_correo']    = $correo;
        $where['adm_clave']     = md5($clave);
        
        $query = $this->db->where($where)->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
}