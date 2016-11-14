<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

require dirname(__FILE__) . '/Base.php';


class MX_Controller {

    public $autoload = array();

    public function __construct() {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class) {
        return CI::$APP->$class;
    }
    
    protected function params() {
        $var_array = array();
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                return $this->input->get();                         
            case 'POST':
                return $this->input->post();                                
            case 'PUT':
            case 'DELETE':
                parse_str(file_get_contents("php://input"), $var_array);
                return $var_array;                
            default:
                return $var_array();
        }
    }
    
    protected function isMobile(){
        $mobile = new Mobile();
        return $mobile->isMobile();        
    }
    
    protected function isTablet(){
        $mobile = new Mobile();
        return $mobile->isTablet();
    }

}
