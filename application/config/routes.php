<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "site/instituicoes";
$route['translate_uri_dashes'] = FALSE;
$route['instituicoes/pesquisar/(:any)'] = "site/instituicoes/pesquisar";
$route['instituicoes/verinstituicao/(:any)'] = "site/instituicoes/verinstituicao";


include_once 'default_routes.php';