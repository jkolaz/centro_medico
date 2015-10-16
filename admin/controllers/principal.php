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
            imprimir($this->session->userdata);
            echo "felicitaciones llegó bien hasta aquí :)";
        }else{
            redirect('index');
        }
    }
}
