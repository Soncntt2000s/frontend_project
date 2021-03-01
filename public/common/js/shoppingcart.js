(function($){
	$(function(){

		var $value = 1;

		$('.js-minusbtn').click(function(){
			var $number = $(this).next();
			if ($($number).html() >1) {				
				$value = $value - 1;
				$($number).html($value);
			}
		});
		$('.js-plusbtn').click(function(){
			var $number = $(this).parent().find('.js-number');
			console.log($number);
			$value = $value + 1;
			$($number).html($value);
		});


	});
})(jQuery);