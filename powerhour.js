//	Powerhour.
//	contraculto.com/powerhour
//	Rodrigo Lanas.

//	Counter.
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
