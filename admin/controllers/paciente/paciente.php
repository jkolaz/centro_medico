<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paciente
 *
 * @author julio
 */
class paciente extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('paciente/paciente_model', 'PACIENTE');
    }
    public function index(){
        if($this->session->userdata('user')!=NULL && $this->session->userdata('user') > 0){
            $this->smartyci->assign("base_url", $this->smartyci->base_url);
            $this->smartyci->assign("cerrar_sesion", $this->_url_logout);
            $this->smartyci->assign("usuario_nombre", $this->session->userdata('nombre'). " " .$this->session->userdata('apellido'));
            //imprimir($this->session->userdata);
            $stdfecha = format_date_actual();
            $this->smartyci->assign('dia_text', $stdfecha->dia_text);
            $this->smartyci->assign('dia_num', date('d'));
            $this->smartyci->assign('mes_text', $stdfecha->mes_text);
            $this->smartyci->assign('anio_num', date('Y'));
            
            $objPaciente = $this->PACIENTE->getPaciente();
            $this->smartyci->assign('objPaciente', $objPaciente);
            
            $this->smartyci->include_template('modal_ver_datos_afiliados', 'inc/modal_ver_datos_afiliados', uniqid());
            $this->smartyci->include_template('modal_agregar_saldo', 'inc/modal_agregar_saldo', uniqid());
            $this->smartyci->include_template('include_script1', 'inc/script', uniqid());
            $this->smartyci->show_page('paciente.tpl',  uniqid());
            
        }else{
            redirect('index');
        }
    }
    
    public function nuevo(){
        if($this->session->userdata('user')!=NULL && $this->session->userdata('user') > 0){
            $this->smartyci->assign("base_url", $this->smartyci->base_url);
            $this->smartyci->assign("cerrar_sesion", $this->_url_logout);
            $this->smartyci->assign("usuario_nombre", $this->session->userdata('nombre'). " " .$this->session->userdata('apellido'));
            //imprimir($this->session->userdata);
            $stdfecha = format_date_actual();
            $this->smartyci->assign('dia_text', $stdfecha->dia_text);
            $this->smartyci->assign('dia_num', date('d'));
            $this->smartyci->assign('mes_text', $stdfecha->mes_text);
            $this->smartyci->assign('anio_num', date('Y'));
            $this->smartyci->include_template('include_script1', 'inc/script', uniqid());
            $this->smartyci->show_page('paciente_nuevo.tpl',  uniqid());
        }else{
            redirect('index');
        }
    }
    
    public function insertar(){
        $admin      = $this->session->userdata('user');
        if($admin != NULL && $admin > 0){
            $nombre     = $this->input->post('nombre', TRUE);
            $paterno    = $this->input->post('paterno', TRUE);
            $materno    = $this->input->post('materno', TRUE);
            $correo     = $this->input->post('correo', TRUE);
            $tipo_doc   = $this->input->post('groupDocum', TRUE);
            $doc        = $this->input->post('documento', TRUE);
            $sexo       = $this->input->post('sexo', TRUE);
            $nac        = $this->input->post('nac', TRUE);
            $direccion  = $this->input->post('direccion', TRUE);
            $ip         = $this->input->ip_address();
            if(true){
                $insertar               = new stdClass();
                $insertar->nombre       = $nombre;
                $insertar->paterno      = $paterno;
                $insertar->materno      = $materno;
                $insertar->sexo         = $sexo;
                $insertar->tipo_doc     = $tipo_doc;
                $insertar->doc          = $doc;
                $insertar->nac          = $nac;
                $insertar->direccion    = $direccion;
                $insertar->correo       = $correo;
                $insertar->admin        = $admin;
                $insertar->ip           = $ip;
                $insert_id = $this->PACIENTE->insertar($insertar);
                if($insert_id > 0){
                    redirect('paciente/paciente/');
                }else{
                    redirect('paciente/paciente/nuevo');
                }
            }else{
                redirect('paciente/paciente/nuevo');
            }
            imprimir($_POST);
        }else{
            redirect();
        }
    }
}
