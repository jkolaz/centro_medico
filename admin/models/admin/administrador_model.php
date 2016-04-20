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
        $where['adm_status']     = 1;
        
        $query = $this->db->where($where)->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    
    public function getAdministratorById($id){
        $where = array();
        $where['adm_id']    = $id;
        
        $query = $this->db->where($where)->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    
    public function getAdministratorByEmail($email){
        $where = array();
        $where['adm_correo']    = $email;
        //$where['adm_status']     = 1;
        
        $query = $this->db->where($where)->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    
    public function generateClaveReset($id){
        $update = array();
        $update['adm_clave_reset'] = uniqid(PREFIJO);
        $update['adm_status'] = 2;
        
        $where = array();
        $where['adm_id'] = $id;
        $this->db->where($where)->update(self::$_table, $update);
    }
    
    public function getModulesToacces($tipo, $id_query = "", $mode = ""){
        $where_add = "";
        if ($id_query != "") {
            switch ($mode) {
                case "+": //only
                    $where_add = " and cm_secciones.sec_id = '" . $id_query . "' ";
                    break;
                case "-":
                    if (!is_array($id_query)) {
                        $id_query[] = $id_query;
                    }
                    foreach ($id_query as $idss) {
                        $where_add .= " and cm_secciones.sec_id != '" . $idss . "' ";
                    }

                    break;
            }
        }
        $sql = "select cm_secciones.*
                from cm_tipo_administrador_pagina, cm_secciones
                where
                        cm_tipo_administrador_pagina.tap_id = '" . $tipo . "' and
                        cm_tipo_administrador_pagina.ra_pp_ra_s_id = cm_secciones.sec_id and
                        cm_secciones.s_status = 1
                        " . $where_add . "
                group by cm_tipo_administrador_pagina.ra_pp_ra_s_id
                order by cm_secciones.sec_nombre
                ";
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    
}
