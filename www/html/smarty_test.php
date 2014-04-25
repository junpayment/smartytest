
<?php

require_once('/usr/local/src/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = '/var/www/temp/templates/';
$smarty->compile_dir  = '/var/www/temp/templates_c/';
$smarty->config_dir   = '/var/www/temp/configs/';
$smarty->cache_dir    = '/var/www/temp/cache/';

$smarty->assign('name','Ned');

//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
//$smarty->debugging = true;

$smarty->display('index.tpl');

?>
