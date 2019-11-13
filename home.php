<?php 

$smarty = new Template();

$smarty->assign('IMAGEM1', Rotas::ImageLink('imagem1.png',1400,250));
$smarty->assign('IMAGEM2', Rotas::ImageLink('imagem2.png',1400,250));
$smarty->assign('IMAGEM3', Rotas::ImageLink('imagem3.png',1400,250));
$smarty->assign('IMAGEM4', Rotas::ImageLink('imagem4.png',1400,250));
$smarty->assign('LOGO', Rotas::ImageLink('logo.png',316,30));
$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));

$smarty->display('home.tpl');

include_once Rotas::get_Pasta_Controller() .'/produtos.php';

 ?>