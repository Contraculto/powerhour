<html>
<head>
	<title>POWER HOUR</title>
	<style>
		body{font-family:'PT Mono','Helvetica Neue',Helvetica,'Bitstream Vera Sans',Arial,sans-serif,cursive;font-weight:lighter;text-align:center;background-color:#fff}
		h1{margin-bottom:0;margin-top:100px;line-height:400px;font-size:400px;letter-spacing:-5px;font-weight:lighter}
		h2{margin-top:0;line-height:20px;font-size:20px;font-weight:lighter}
	</style>
	<link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1 class="time"></h1>
	<h2 class="counter"></h2>
</body>
<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script>
$(document).ready(function(){
	time = 0;
	count = 0;
	sliderTime = self.setInterval(function(){
		if (time == 60) {
			$('body').css({'background-color': '#C21A01'});
			$('.time').css({'color': '#fff'});
			$('.counter').css({'color': '#fff'});
			$('.time').html('DRINK');
			time = 0;
			count = count+1;
			$('.counter').html(count);
		}
		else if (time == 1) {
			$('body').css({'background-color': '#fff'});
			$('.time').css({'color': '#000'});
			$('.counter').css({'color': '#000'});
			$('.time').html(time);
		}
		else {
			$('.time').html(time);
		}
		time = time+1;
	},1000);
});
</script>
</html>
