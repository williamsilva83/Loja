<?php 

	require './lib/autoload.php';

	$smarty = new Template();

	Rotas::get_pagina();

	//valores para o template

	$smarty->assign('Nome', 'William Felipe da Silva');

	echo ROTAS::get_SiteRAIZ() . '</br>' ;

 	$smarty->display('index.tpl');
 ?>