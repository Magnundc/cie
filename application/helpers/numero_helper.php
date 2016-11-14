<?php



/**
 * Função para inverter datas 
 *
 * @author wender
 * @param string data
 */
class Numero_helper {
                
    public static function formatar_moeda($valor){
        $v = str_replace(".", "", $valor);
        return str_replace(array("R$","m","²"," ", ","), array("","","","","."), $v);
    }
}
