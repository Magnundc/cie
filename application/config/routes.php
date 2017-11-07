<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

//Rota para checar permissão
$route['checar'] = 'site/colaboradores/checar'; 

//sair
$route['sair'] = 'site/instituicoes/logout'; 

$route['default_controller'] = "site/instituicoes/index";
$route['translate_uri_dashes'] = FALSE;
$route['instituicoes/pesquisar/(:any)'] = "site/instituicoes/pesquisar";
$route['instituicoes/verinstituicao/(:any)'] = "site/instituicoes/verinstituicao";

//Rota pública
$route['publico'] = 'publico/publico/index';
$route['publico/instituicoes'] = 'publico/publico/index'; 
$route['publico/listar_cursos/(:num)'] = 'publico/publico/listar_cursos';
$route['publico/listar_cursos_json/(:num)'] = 'publico/publico/listar_cursos_json';
$route['publico/lista_cursos_por_cursosconfea/(:num)'] = 'publico/publico/lista_cursos_por_cursosconfea';
$route['publico/graf_cursosconfea_cursos'] = 'publico/publico/graf_cursosconfea_cursos';
$route['publico/total'] = 'publico/publico/total';
$route['publico/totalcursos'] = 'publico/publico/totalcursos';
$route['publico/listar/(:num)/(:num)/(:any)'] = 'publico/publico/listar'; 
$route['publico/listar_por_curso/(:num)/(:num)/(:any)'] = 'publico/publico/listar_por_curso'; 
$route['publico/salvar'] = 'publico/publico/salvar'; 
$route['publico/excluir/(:num)'] = 'publico/publico/excluir'; 
$route['publico/obter/(:num)'] = 'publico/publico/obter';
$route['publico/vertinstituicao/(:num)'] = 'publico/publico/verinstituicao';
$route['publico/carregar/(:num)'] = 'publico/publico/carregar';
$route['publico/carregar_curso/(:num)'] = 'publico/publico/carregar_curso';
$route['publico/traducao'] = 'publico/publico/traducao';
$route['publico/pesquisa'] = 'publico/publico/pesquisa';
$route['publico/pesquisa_curso'] = 'publico/publico/pesquisa_curso';
$route['publico/listar_historicodecisoes_json/(:num)'] = 'publico/publico/listar_historicodecisoes_json';
$route['publico/arquivos/(:num)'] = 'publico/publico/listar_arquivos';


//Rota para arquivos
$route['upload'] = 'site/arquivos/upload';
$route['remover/arquivos/(:any)'] = 'site/arquivos/remover';
$route['carregar/arquivos/(:num)'] = 'site/arquivos/listar_arquivos';
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
$route['colaboradores/pesquisa/(:num)'] = 'site/colaboradores/pesquisa'; 


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

//Rota para contatos
$route['contatos'] = 'site/contatos/index'; 
$route['contatos/pesquisai'] = 'site/contatos/pesquisains'; 
$route['contatos/pesquisac'] = 'site/contatos/pesquisacur'; 
$route['contatos/pesquisacoordi'] = 'site/contatos/pesquisacoordi'; 


//Rota para cursos 
$route['cursos'] = 'site/cursos/index'; 
$route['cursos/total'] = 'site/cursos/total'; 
$route['cursos/listar/(:num)/(:num)/(:any)'] = 'site/cursos/listar'; 
$route['cursos/salvar'] = 'site/cursos/salvar'; 
$route['cursos/excluir/(:num)'] = 'site/cursos/excluir'; 
$route['cursos/obter/(:num)'] = 'site/cursos/obter';
$route['cursos/carregar/(:num)'] = 'site/cursos/carregar';
$route['instituicoes/vercurso/(:num)'] = 'site/cursos/vercurso';
$route['cursos/listar_cursos/(:num)'] = 'site/cursos/listar_cursos';
$route['cursos/listar_cursos_json/(:num)'] = 'site/cursos/listar_cursos_json';
$route['cursos/pdf/(:num)'] = 'site/pdf/cursosPdf';
$route['cursoshist/pdf/(:num)'] = 'site/pdf/cursoshistPdf';
$route['cursos/Ver_nome_instituicao/(:num)'] = 'site/cursos/Ver_nome_instituicao';
$route['instituicoes/listar_cursos/(:num)'] = 'site/cursos/listar_cursos';



//Rota para cursosconfea 
$route['cursosconfea'] = 'site/cursosconfea/index'; 
$route['cursosconfea/total'] = 'site/cursosconfea/total'; 
$route['cursosconfea/listar/(:num)/(:num)/(:any)'] = 'site/cursosconfea/listar'; 
$route['cursosconfea/salvar'] = 'site/cursosconfea/salvar'; 
$route['cursosconfea/excluir/(:num)'] = 'site/cursosconfea/excluir'; 
$route['cursosconfea/obter/(:num)'] = 'site/cursosconfea/obter'; 
$route['cursosconfea/pesquisa'] = 'site/cursosconfea/pesquisa'; 

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
$route['instituicoes/listar_historicodecisoes/(:num)'] = 'site/historicodecisoes/listar_historicodecisoes'; 
$route['historicodecisoes/listar_historicodecisoes_json/(:num)'] = 'site/historicodecisoes/listar_historicodecisoes_json'; 
$route['historicodecisoes/carregar/(:num)'] = 'site/historicodecisoes/carregar'; 
$route['instituicoes/ver_historicodecisoes/(:num)'] = 'site/historicodecisoes/ver_historicodecisoes'; 
$route['historicodecisoes/ver_nomecurso/(:num)'] = 'site/historicodecisoes/ver_nomecurso';
$route['historicodecisoes/ver_nomeinstituicao/(:num)'] = 'site/historicodecisoes/ver_nomeinstituicao';
$route['historicodecisoes/pdf/(:num)'] = 'site/pdf/historicodecisoesPdf';


//Rota para instituicoes 
$route['instituicoes'] = 'site/instituicoes/index'; 
$route['instituicoes/total'] = 'site/instituicoes/total'; 
$route['instituicoes/listar/(:num)/(:num)/(:any)'] = 'site/instituicoes/listar'; 
$route['instituicoes/salvar'] = 'site/instituicoes/salvar'; 
$route['instituicoes/excluir/(:num)'] = 'site/instituicoes/excluir'; 
$route['instituicoes/obter/(:num)'] = 'site/instituicoes/obter';
$route['instituicoes/vertinstituicao/(:num)'] = 'site/instituicoes/verinstituicao';
$route['instituicoes/carregar/(:num)'] = 'site/instituicoes/carregar';
$route['instituicoes/traducao'] = 'site/instituicoes/traducao';
$route['instituicoes/pesquisa'] = 'site/instituicoes/pesquisa';
$route['instituicoes/pdf/(:num)'] = 'site/pdf/instituicoesPdf';



//Rota para listasegresso 
$route['listasegresso'] = 'site/listasegresso/index'; 
$route['listasegresso/total'] = 'site/listasegresso/total'; 
$route['listasegresso/listar/(:num)/(:num)/(:any)'] = 'site/listasegresso/listar'; 
$route['listasegresso/salvar'] = 'site/listasegresso/salvar'; 
$route['listasegresso/excluir/(:num)'] = 'site/listasegresso/excluir'; 
$route['listasegresso/obter/(:num)'] = 'site/listasegresso/obter'; 
$route['instituicoes/listar_listasegresso/(:num)'] = 'site/listasegresso/listar_listasegresso';
$route['instituicoes/ver_listasegresso/(:num)'] = 'site/listasegresso/ver_listasegresso'; 
$route['listasegresso/listar_listasegresso_json/(:num)'] = 'site/listasegresso/listar_listasegresso_json'; 
$route['listasegresso/ver_nomecurso/(:num)'] = 'site/listasegresso/ver_nomecurso';
$route['listasegresso/ver_nomeinstituicao/(:num)'] = 'site/listasegresso/ver_nomeinstituicao';

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
$route['recadastramentos/carregar/(:num)'] = 'site/recadastramentos/carregar'; 
$route['instituicoes/listar_recadastramentos/(:num)'] = 'site/recadastramentos/listar_recadastramentos';
$route['recadastramentos/Ver_nome_instituicao/(:num)'] = 'site/recadastramentos/Ver_nome_instituicao';
$route['recadastramentos/listar_recadastramentos_json/(:num)'] = 'site/recadastramentos/listar_recadastramentos_json';
$route['instituicoes/verrecadastramento/(:num)'] = 'site/recadastramentos/verrecadastramento';
$route['recadastramentos/pdf/(:num)'] = 'site/pdf/recadastramentosPdf';


//Rota para titulosconfea 
$route['titulosconfea'] = 'site/titulosconfea/index'; 
$route['titulosconfea/total'] = 'site/titulosconfea/total'; 
$route['titulosconfea/listar/(:num)/(:num)/(:any)'] = 'site/titulosconfea/listar'; 
$route['titulosconfea/salvar'] = 'site/titulosconfea/salvar'; 
$route['titulosconfea/excluir/(:num)'] = 'site/titulosconfea/excluir'; 
$route['titulosconfea/obter/(:num)'] = 'site/titulosconfea/obter'; 
$route['titulosconfea/pesquisa'] = 'site/titulosconfea/pesquisa'; 

include_once 'default_routes.php';