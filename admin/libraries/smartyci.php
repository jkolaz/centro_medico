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
    var $maintpl = "main";
    var $pg_title = "Odontología Integral S&S | Admin";
    var $si_ajax;
    var $base_url;
    
    public function __construct(){
        parent::__construct();
        
        $config =& get_config();
        $this->caching = 0;
        $this->si_ajax = false;
        $config['application_dir'] = APPPATH;
        $this->setTemplateDir( $config['application_dir'] . 'views/templates' );
        $this->setCompileDir( $config['application_dir'] . 'views/templates_c' );
        $this->setConfigDir( $config['application_dir'] . 'third_party/Smarty/configs' );
        $this->setCacheDir( $config['application_dir'] . 'cache' );
        $this->base_url = $config['base_url'];
        
        $this->assign("pg_title", $this->pg_title);
        
        //$this->display_web();
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
    
    function display_web() {
        if ($this->si_ajax == false) {
            $this->display($this->maintpl . '.tpl');
        }
    }
    
    public function show_page($page_html, $cache_id = ""){
        if ($this->si_ajax) {

            $this->resp_json($page_html);
        } else {
            $this->assign("DIR_PRINCIPAL", $this->base_url);
            $this->include_template("contentheader", "inc/viewheader", $cache_id);
            $html = $this->fetch($page_html, $cache_id);
            $this->assign("content_main", $html);
            $this->display($this->maintpl . '.tpl');
        }
    }
    
    function resp_json($aVars) {
        if (is_array($aVars)) {
            foreach ($aVars as $aVars_id => $aVars_val) {
                $aVars[$aVars_id] = $this->limpiarHtml($aVars_val);
            }
        } else {
            $aVars["html"] = $this->limpiarHtml($aVars);
        }
        echo json_encode($aVars);
        exit;
    }
    
    function limpiarHtml($html) {
        $busca = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $reemplaza = array('>', '<', '\\1');
        $html = str_replace("´", "", $html);
        //echo $html."<br>";
        return preg_replace($busca, $reemplaza, $html);
    }
    function include_template($var, $template, $cache_id = "") {
        $html = $this->fetch($template . ".tpl", $cache_id);
        //echo $html;
        $this->assign($var, $html);
    }
}
