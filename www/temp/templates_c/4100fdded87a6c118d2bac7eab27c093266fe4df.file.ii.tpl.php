<?php /* Smarty version Smarty-3.1.13, created on 2013-07-18 02:04:35
         compiled from "/var/www/temp/templates/ii.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107213993351e6c6c4a06f38-64313437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4100fdded87a6c118d2bac7eab27c093266fe4df' => 
    array (
      0 => '/var/www/temp/templates/ii.tpl',
      1 => 1374080671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107213993351e6c6c4a06f38-64313437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e6c6c4a71ae4_92875107',
  'variables' => 
  array (
    'out' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e6c6c4a71ae4_92875107')) {function content_51e6c6c4a71ae4_92875107($_smarty_tpl) {?><!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html lang="ja">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>iiiiiiiiii</title>
	</head>
	<body>
		<div align="center" width="100%">	
			<h1>IISAAAAAAAN!!!!!!</h1>
			<form method="post" action="ii.php">
				<input type="text" name="input">
				<input type="submit">
				<div>USAGE:MM YYYY</div>
			</form>
			<textarea align="center" cols=20 rows=8 readonly>
				<?php echo $_smarty_tpl->tpl_vars['out']->value;?>

			</textarea>
		</div>
	</body>
</html>

<?php }} ?>