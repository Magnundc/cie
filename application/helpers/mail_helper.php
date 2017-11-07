<?php

function getConfig() {
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtplw.com.br'; //'aspmx.l.google.com';
    $config['smtp_port'] = '587';
    $config['smtp_timeout'] = '60';
    $config['smtp_user'] = 'creagoservicos';
    $config['smtp_pass'] = 'ZQVaiRnr9815';
    $config['charset'] = 'utf-8';
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    return $config;
}


function saldar() {
    // Formato 24 horas (de 1 a 24)
    $hora = date('G');
    if (($hora >= 0) AND ( $hora < 6)) {
        $mensagem = "Boa madrugada";
    } else if (($hora >= 6) AND ( $hora < 12)) {
        $mensagem = "Bom dia";
    } else if (($hora >= 12) AND ( $hora < 18)) {
        $mensagem = "Boa tarde";
    } else {
        $mensagem = "Boa noite";
    }
    return $mensagem;
}
