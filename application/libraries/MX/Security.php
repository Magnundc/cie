<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');



class MX_Security extends MX_Controller{    
    function __construct() {
        if(!isset($_SESSION['logado'])){
            header("location:".base_url."/private");
            exit;
        }
        
    }
    
    function ismaster() {
        if($_SESSION['logado']->master){
           return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function isadmin() {
        if($_SESSION['logado']->admin){
           return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function islistaegresso() {
        if($_SESSION['logado']->lista_egresso){
           return TRUE;
        }else{
            return FALSE;
        }
    }
    
     function iscolaborador() {
        if(!$_SESSION['logado']->lista_egresso and !$_SESSION['logado']->admin and !$_SESSION['logado']->master){
           return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
