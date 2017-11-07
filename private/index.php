<?php
session_start();
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

$url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$user = new stdClass();
$user->login = $_SERVER['PHP_AUTH_USER'];
$_SESSION['logado'] = $user;
$url = str_replace("private/", NULL, $url)."/checar";
header("location:".$url);