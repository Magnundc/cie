<?php



/**
 * Função para inverter datas 
 *
 * @author wender
 * @param string data
 */
class Data_helper {
                
    public static function inverter($data){
        $d = explode(" ", $data);
        $date = isset($d[0]) ? $d[0] : $data;
        $date = str_replace("/", "-", $date);
        $date = explode("-", $date);
        $time = isset($d[1]) ? " " . $d[1] : null;
        if (isset($date[2])) {
            if (strlen($date[0]) === 4 OR strlen($date[2]) === 4) {
                $date = $date[2] . "-" . $date[1] . "-" . $date[0];
            } else {
                $date = new Exception("Informe a data no formato date ou datetime");
            }
        } else {
            $date = new Exception("Informe a data no formato date ou datetime");
        }
        return $date . $time;
    }
    
    public static function saudacao(){
        if(date('H') >= 0 and date('H') < 12){
            return "bom dia";
        }
        else if(date('H') >= 12 and date('H') < 19){
            return "boa tarde";
        }else{
            return "boa noite";
        }
    }
}
