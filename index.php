<?php 
error_reporting(0);
if(!isset($_SESSION)){
	session_start();
}


require './lib/autoload.php';


$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();


//valores para o template
$smarty->assign('NOME', 'HUGO VASCONCELOS DE FREITAS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('index.html');
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIAS',$categorias->GetItens());
$smarty->assign('DATA',Sistema::DataAtualBR());
$smarty->assign('IMAGEM1', Rotas::ImageLink('imagem1.png',1400,400));
$smarty->assign('IMAGEM2', Rotas::ImageLink('imagem2.png',1400,400));
$smarty->assign('IMAGEM3', Rotas::ImageLink('imagem3.png',1400,400));
$smarty->assign('IMAGEM4', Rotas::ImageLink('imagem4.png',1400,400));
$smarty->display('index.tpl');
 ?>