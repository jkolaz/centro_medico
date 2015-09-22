<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of smartyci
 *
 * @author julio
 */
if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

require_once( 'admin/third_party/smarty/libs/Smarty.class.php' );

class Smartyci extends Smarty{
    //put your code here
    public function __construct(){
        parent::__construct();

        $config =& get_config();
        $this->caching = 1;
        $config['application_dir'] = APPPATH;
        $this->setTemplateDir( $config['application_dir'] . 'views/templates' );
        $this->setCompileDir( $config['application_dir'] . 'views/templates_c' );
        $this->setConfigDir( $config['application_dir'] . 'third_party/Smarty/configs' );
        $this->setCacheDir( $config['application_dir'] . 'cache' );
    }

    //if specified template is cached then display template and exit, otherwise, do nothing.
    public function useCached( $tpl, $cacheId = null )
    {
        if ( $this->isCached( $tpl, $cacheId ) )
        {
            $this->display( $tpl, $cacheId );
            exit();
        }
    }
}
