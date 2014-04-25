<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html lang="ja">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>FizzBuzz</title>
		<script>
			var myData = {$json_data};
			var cnt = 0;
			var num = {$num};
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
				1～<input type="number" name="max" value="{$max}">
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

