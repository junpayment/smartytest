<?php

require_once('/usr/local/src/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = '/var/www/temp/templates/';
$smarty->compile_dir  = '/var/www/temp/templates_c/';
$smarty->config_dir   = '/var/www/temp/configs/';
$smarty->cache_dir    = '/var/www/temp/cache/';


// ½èÍý
$min = 1;
$max = $_POST["max"];
if($max == 0){
	$max = 100;
}

$ary = range( $min, $max );
$disp = array( "FIZZ", "BUZZ", "FIZZBUZZ" );

$ary_out;
foreach ( $ary as $value ){
	$flg = 0; 
	if( $value%3==0 && $value%5==0 ) {
		$flg = 3; 
	} else if( $value%3==0 ) {
		$flg = 1; 
	} else if( $value%5==0 ) {
		$flg = 2; 
	} else {
		$flg = 0; 
	}
	$ary_out["no$value"] = array( value => "$value", fb_flg  => "$flg" );
}
/*
foreach ( $ary_out as $ref ){
	if( $ref['fb_flg'] == 0 ){
		print "$ref[value]\n";
	} else {
		$idx = $ref['fb_flg'] - 1;
		print "$disp[$idx]\n";
	}
}
*/

$num = count($ary_out);
$json_data = json_encode($ary_out);

//print "$json_data\n";

$smarty->assign('json_data',$json_data);
$smarty->assign('max',$max);
$smarty->assign('num',$num);

$smarty->display('fizzbuzz.tpl');

?>

