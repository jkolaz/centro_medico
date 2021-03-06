<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('imprimir')) {
    function imprimir($objeto) {
        echo '<pre>';
        print_r($objeto);
        echo '</pre>';
    }
}

if(!function_exists('format_date')){
    function format_date_actual(){
        $dia_text = "";
        $mes_text = "";
        
        $temp_dia = date('N');
        switch ($temp_dia){
            case 1:/*Lunes*/
                $dia_text = "Lunes";
                break;
            case 2:/*Martes*/
                $dia_text = "Martes";
                break;
            case 3:/*Miercoles*/
                $dia_text = "Miercoles";
                break;
            case 4:/*Jueves*/
                $dia_text = "Jueves";
                break;
            case 5:/*Viernes*/
                $dia_text = "Viernes";
                break;
            case 6:/*Sabado*/
                $dia_text = "Sabado";
                break;
            case 7:/*Domingo*/
                $dia_text = "Domingo";
                break;
        }
        
        $temp_mes = date('n');
        switch ($temp_mes){
            case 1:/*enero*/
                $mes_text = "enero" ;
                break;
            case 2:/*febrero*/
                $mes_text = "febrero" ;
                break;
            case 3:/*marzo*/
                $mes_text = "marzo" ;
                break;
            case 4:/*abril*/
                $mes_text = "abril" ;
                break;
            case 5:/*mayo*/
                $mes_text = "mayo" ;
                break;
            case 6:/*junio*/
                $mes_text = "junio" ;
                break;
            case 7:/*julio*/
                $mes_text = "julio" ;
                break;
            case 8:/*agosto*/
                $mes_text = "agosto" ;
                break;
            case 9:/*septiembre*/
                $mes_text = "septiembre" ;
                break;
            case 10:/*octubre*/
                $mes_text = "octubre" ;
                break;
            case 11:/*noviembre*/
                $mes_text = "noviembre" ;
                break;
            case 12:/*diciembre*/
                $mes_text = "diciembre" ;
                break;
        }
        
        $stdFecha = new stdClass();
        $stdFecha->dia_text = $dia_text;
        $stdFecha->mes_text = $mes_text;
        return $stdFecha;
    }
}