<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paciente_model
 *
 * @author VMC-D02
 */
class Paciente_model extends CI_Model{
    //put your code here
    private static $_table = "cm_paciente";
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getPaciente(){
        $where = array();
        $where['pac_status'] = 1;
        $query = $this->db->where($where)->order_by('pac_apellido_paterno')->get(self::$_table);
        if($query->num_rows){
            return $query->result();
        }
        return NULL;
    }
    
    public function insertar($objInsertar){
        $insertar = array();
        $insertar['pac_nombre']             = $objInsertar->nombre;
        $insertar['pac_apellido_paterno']   = $objInsertar->paterno;
        $insertar['pac_apellido_materno']   = $objInsertar->materno;
        $insertar['pac_sexo']               = $objInsertar->sexo;
        $insertar['pac_tipo_doc']           = $objInsertar->tipo_doc;
        $insertar['pac_dni']                = $objInsertar->doc;
        $insertar['pac_fecha_nac']          = $objInsertar->nac;
        $insertar['pac_direccion']          = $objInsertar->direccion;
        $insertar['pac_correo']             = $objInsertar->correo;
        $insertar['pac_adm_id']             = $objInsertar->admin;
        $insertar['pac_ip_registro']        = $objInsertar->ip;
        if($this->db->insert(self::$_table, $insertar)){
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }
}
