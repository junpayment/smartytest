<?php /* Smarty version Smarty-3.1.13, created on 2013-07-23 09:34:44
         compiled from "/var/www/temp/templates/fizzbuzz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158399894351eda95f828559-71540212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48adec3abd068c2ee6f9aad7daa9d23c193eb0ee' => 
    array (
      0 => '/var/www/temp/templates/fizzbuzz.tpl',
      1 => 1374539681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158399894351eda95f828559-71540212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51eda95f87ada6_37208917',
  'variables' => 
  array (
    'json_data' => 0,
    'num' => 0,
    'max' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51eda95f87ada6_37208917')) {function content_51eda95f87ada6_37208917($_smarty_tpl) {?><!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html lang="ja">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>FizzBuzz</title>
		<script>
			var myData = <?php echo $_smarty_tpl->tpl_vars['json_data']->value;?>
;
			var cnt = 0;
			var num = <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
;
			var img = new Array();

			img[0] = new Image();
			img[0].src = "img/non.jpg";
			img[1] = new Image();
			img[1].src = "img/non.jpg";
			img[2] = new Image();
			img[2].src = "img/buzz.jpg";
			img[3] = new Image();
			img[3].src = "img/buzz.jpg";

			function fizzbuzz(){
				cnt++;
				
				if( cnt <= num ){
					eval("var obj = myData.no" + cnt);
					document.getElementById('fb_img').src = img[obj.fb_flg].src;
					document.getElementById('fb_img').width = 10 * cnt;
					switch(obj.fb_flg){
						case "1":
							document.getElementById('fb_text').innerHTML = "FIZZ";
							break;
						case "2":
							document.getElementById('fb_text').innerHTML = "BUZZ";
							break;
						case "3":
							document.getElementById('fb_text').innerHTML = "FIZZBUZZ";
							break;
						default:
							document.getElementById('fb_text').innerHTML = obj.value;
							break;
					}
				} else {
					document.location = "http://www.disney.co.jp/toystory/";
					return; 
				}
				var delay = 1000 * (1-(cnt/num)*2.5);
				setTimeout("fizzbuzz()", delay);
			}
		</script>
	</head>
	<body onLoad="fizzbuzz()">
		<div align="center" width="100%">
			<h1>FIZZBUZZ</h1>
			<form method="post" action="fizzbuzz.php">
				1～<input type="number" name="max" value="<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
">
				<input type="submit">
			</form>
			<div>
				<h1 id="fb_text"></h1>
			</div>
			<div>
				<img id="fb_img">
			</div>
		</div>
	</body>
</html>

<?php }} ?>