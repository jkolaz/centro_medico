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
        if($this->session->userdata('user')!=NULL && $this->session->userdata('user') > 0){
            $this->load->library( 'Smartyci' );
            $this->smartyci->assign("base_url", $this->smartyci->base_url);
            //imprimir($this->session->userdata);
            $this->smartyci->include_template('modal_ver_datos_afiliados', 'inc/modal_ver_datos_afiliados', uniqid());
            $this->smartyci->include_template('modal_agregar_saldo', 'inc/modal_agregar_saldo', uniqid());
            $this->smartyci->include_template('include_script1', 'inc/script', uniqid());
            $this->smartyci->show_page('principal.tpl',  uniqid());
            
        }else{
            redirect('index');
        }
    }
}
