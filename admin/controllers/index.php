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
        $this->load->library( 'Smartyci' );
        //$this->smartyci->useCached( 'index.tpl' );
        //$this->smartyci->maintpl = "mainClear";
        $this->smartyci->show_page('index.tpl');
    }
}
