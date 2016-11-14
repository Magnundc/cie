<?php

(defined('BASEPATH')) OR exit('Acesso direto ao arquivo não permitido'); 

//Rota para contatos 
$route['contatos'] = 'site/contatos/index'; 
$route['contatos/total'] = 'site/contatos/total'; 
$route['contatos/listar/(:num)/(:num)/(:any)'] = 'site/contatos/listar'; 
$route['contatos/salvar'] = 'site/contatos/salvar'; 
$route['contatos/excluir/(:num)'] = 'site/contatos/excluir'; 
$route['contatos/obter/(:num)'] = 'site/contatos/obter'; 

//Rota para cursos 
$route['cursos'] = 'site/cursos/index'; 
$route['cursos/total'] = 'site/cursos/total'; 
$route['cursos/listar/(:num)/(:num)/(:any)'] = 'site/cursos/listar'; 
$route['cursos/salvar'] = 'site/cursos/salvar'; 
$route['cursos/excluir/(:num)'] = 'site/cursos/excluir'; 
$route['cursos/obter/(:num)'] = 'site/cursos/obter'; 

//Rota para grades 
$route['grades'] = 'site/grades/index'; 
$route['grades/total'] = 'site/grades/total'; 
$route['grades/listar/(:num)/(:num)/(:any)'] = 'site/grades/listar'; 
$route['grades/salvar'] = 'site/grades/salvar'; 
$route['grades/excluir/(:num)'] = 'site/grades/excluir'; 
$route['grades/obter/(:num)'] = 'site/grades/obter'; 

//Rota para instituicoes 
$route['instituicoes'] = 'site/instituicoes/index'; 
$route['instituicoes/total'] = 'site/instituicoes/total'; 
$route['instituicoes/listar/(:num)/(:num)/(:any)'] = 'site/instituicoes/listar'; 
$route['instituicoes/salvar'] = 'site/instituicoes/salvar'; 
$route['instituicoes/excluir/(:num)'] = 'site/instituicoes/excluir'; 
$route['instituicoes/obter/(:num)'] = 'site/instituicoes/obter'; 

//Rota para listasegresso 
$route['listasegresso'] = 'site/listasegresso/index'; 
$route['listasegresso/total'] = 'site/listasegresso/total'; 
$route['listasegresso/listar/(:num)/(:num)/(:any)'] = 'site/listasegresso/listar'; 
$route['listasegresso/salvar'] = 'site/listasegresso/salvar'; 
$route['listasegresso/excluir/(:num)'] = 'site/listasegresso/excluir'; 
$route['listasegresso/obter/(:num)'] = 'site/listasegresso/obter'; 

