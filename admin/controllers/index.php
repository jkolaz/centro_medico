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
        $this->smartyci->include_template('contentheader', 'inc/viewheader', uniqid());
//        $html = $this->smartyci->fetch("inc/viewheader.tpl");
//        $this->smartyci->assign('contentheader', $html);
        echo "onl";
        $this->smartyci->assign('hola', "holaaaaaaaaaa");
        $this->smartyci->maintpl = "mainClear";
        $this->smartyci->show_page('login.tpl');
    }
}
