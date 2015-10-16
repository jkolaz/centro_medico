<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author julio
 */
class Index extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        $this->login();
    }
    public function login($error = 0){
        $this->load->library( 'Smartyci' );
        $this->smartyci->assign("base_url", $this->smartyci->base_url);
        if($error == 1){
            $this->smartyci->assign("js_error", '$.mensajeUsuIncorrecto();');
        }else{
            $this->smartyci->assign("js_error", '');
        }
        $this->smartyci->include_template('include_script1', 'inc/script', uniqid());
        
        $this->smartyci->show_page('login.tpl',  uniqid());
    }
}
