<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of principal
 *
 * @author VMC-D02
 */
class Principal extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        redirect(URL_PANEL);
        exit;
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
            
            $this->smartyci->include_template('modal_ver_datos_afiliados', 'inc/modal_ver_datos_afiliados', uniqid());
            $this->smartyci->include_template('modal_agregar_saldo', 'inc/modal_agregar_saldo', uniqid());
            $this->smartyci->include_template('include_script1', 'inc/script', uniqid());
            $this->smartyci->show_page('principal.tpl',  uniqid());
            
        }else{
            redirect('index');
        }
    }
}
