<?php

(defined('BASEPATH')) OR exit('Acesso direto ao arquivo não permitido'); 

//Rota para arquivos 
$route['arquivos'] = 'site/arquivos/index'; 
$route['arquivos/total'] = 'site/arquivos/total'; 
$route['arquivos/listar/(:num)/(:num)/(:any)'] = 'site/arquivos/listar'; 
$route['arquivos/salvar'] = 'site/arquivos/salvar'; 
$route['arquivos/excluir/(:num)'] = 'site/arquivos/excluir'; 
$route['arquivos/obter/(:num)'] = 'site/arquivos/obter'; 

//Rota para colaboradores 
$route['colaboradores'] = 'site/colaboradores/index'; 
$route['colaboradores/total'] = 'site/colaboradores/total'; 
$route['colaboradores/listar/(:num)/(:num)/(:any)'] = 'site/colaboradores/listar'; 
$route['colaboradores/salvar'] = 'site/colaboradores/salvar'; 
$route['colaboradores/excluir/(:num)'] = 'site/colaboradores/excluir'; 
$route['colaboradores/obter/(:num)'] = 'site/colaboradores/obter'; 

//Rota para comunicado 
$route['comunicado'] = 'site/comunicado/index'; 
$route['comunicado/total'] = 'site/comunicado/total'; 
$route['comunicado/listar/(:num)/(:num)/(:any)'] = 'site/comunicado/listar'; 
$route['comunicado/salvar'] = 'site/comunicado/salvar'; 
$route['comunicado/excluir/(:num)'] = 'site/comunicado/excluir'; 
$route['comunicado/obter/(:num)'] = 'site/comunicado/obter'; 

//Rota para contatoscrea 
$route['contatoscrea'] = 'site/contatoscrea/index'; 
$route['contatoscrea/total'] = 'site/contatoscrea/total'; 
$route['contatoscrea/listar/(:num)/(:num)/(:any)'] = 'site/contatoscrea/listar'; 
$route['contatoscrea/salvar'] = 'site/contatoscrea/salvar'; 
$route['contatoscrea/excluir/(:num)'] = 'site/contatoscrea/excluir'; 
$route['contatoscrea/obter/(:num)'] = 'site/contatoscrea/obter'; 

//Rota para cursos 
$route['cursos'] = 'site/cursos/index'; 
$route['cursos/total'] = 'site/cursos/total'; 
$route['cursos/listar/(:num)/(:num)/(:any)'] = 'site/cursos/listar'; 
$route['cursos/salvar'] = 'site/cursos/salvar'; 
$route['cursos/excluir/(:num)'] = 'site/cursos/excluir'; 
$route['cursos/obter/(:num)'] = 'site/cursos/obter'; 

//Rota para cursosconfea 
$route['cursosconfea'] = 'site/cursosconfea/index'; 
$route['cursosconfea/total'] = 'site/cursosconfea/total'; 
$route['cursosconfea/listar/(:num)/(:num)/(:any)'] = 'site/cursosconfea/listar'; 
$route['cursosconfea/salvar'] = 'site/cursosconfea/salvar'; 
$route['cursosconfea/excluir/(:num)'] = 'site/cursosconfea/excluir'; 
$route['cursosconfea/obter/(:num)'] = 'site/cursosconfea/obter'; 

//Rota para diplomasnaoreconhecidos 
$route['diplomasnaoreconhecidos'] = 'site/diplomasnaoreconhecidos/index'; 
$route['diplomasnaoreconhecidos/total'] = 'site/diplomasnaoreconhecidos/total'; 
$route['diplomasnaoreconhecidos/listar/(:num)/(:num)/(:any)'] = 'site/diplomasnaoreconhecidos/listar'; 
$route['diplomasnaoreconhecidos/salvar'] = 'site/diplomasnaoreconhecidos/salvar'; 
$route['diplomasnaoreconhecidos/excluir/(:num)'] = 'site/diplomasnaoreconhecidos/excluir'; 
$route['diplomasnaoreconhecidos/obter/(:num)'] = 'site/diplomasnaoreconhecidos/obter'; 

//Rota para historicodecisoes 
$route['historicodecisoes'] = 'site/historicodecisoes/index'; 
$route['historicodecisoes/total'] = 'site/historicodecisoes/total'; 
$route['historicodecisoes/listar/(:num)/(:num)/(:any)'] = 'site/historicodecisoes/listar'; 
$route['historicodecisoes/salvar'] = 'site/historicodecisoes/salvar'; 
$route['historicodecisoes/excluir/(:num)'] = 'site/historicodecisoes/excluir'; 
$route['historicodecisoes/obter/(:num)'] = 'site/historicodecisoes/obter'; 

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

//Rota para log 
$route['log'] = 'site/log/index'; 
$route['log/total'] = 'site/log/total'; 
$route['log/listar/(:num)/(:num)/(:any)'] = 'site/log/listar'; 
$route['log/salvar'] = 'site/log/salvar'; 
$route['log/excluir/(:num)'] = 'site/log/excluir'; 
$route['log/obter/(:num)'] = 'site/log/obter'; 

//Rota para recadastramentos 
$route['recadastramentos'] = 'site/recadastramentos/index'; 
$route['recadastramentos/total'] = 'site/recadastramentos/total'; 
$route['recadastramentos/listar/(:num)/(:num)/(:any)'] = 'site/recadastramentos/listar'; 
$route['recadastramentos/salvar'] = 'site/recadastramentos/salvar'; 
$route['recadastramentos/excluir/(:num)'] = 'site/recadastramentos/excluir'; 
$route['recadastramentos/obter/(:num)'] = 'site/recadastramentos/obter'; 

//Rota para titulosconfea 
$route['titulosconfea'] = 'site/titulosconfea/index'; 
$route['titulosconfea/total'] = 'site/titulosconfea/total'; 
$route['titulosconfea/listar/(:num)/(:num)/(:any)'] = 'site/titulosconfea/listar'; 
$route['titulosconfea/salvar'] = 'site/titulosconfea/salvar'; 
$route['titulosconfea/excluir/(:num)'] = 'site/titulosconfea/excluir'; 
$route['titulosconfea/obter/(:num)'] = 'site/titulosconfea/obter'; 

