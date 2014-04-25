<?php

require_once('/usr/local/src/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = '/var/www/temp/templates/';
$smarty->compile_dir  = '/var/www/temp/templates_c/';
$smarty->config_dir   = '/var/www/temp/configs/';
$smarty->cache_dir    = '/var/www/temp/cache/';

$out = "NANKA HENDAYO!";
$arg = $_POST["input"];

$tmp = shell_exec("cal $arg");

if( $tmp ){
	$out = $tmp;
}

$smarty->assign('out',$out);

$smarty->display('ii.tpl');

?>

