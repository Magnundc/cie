<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Home extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
    }

    public function index(){
        $this->parser->parse("home/index");
    }

}

