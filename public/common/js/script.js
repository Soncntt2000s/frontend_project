(function($){
	$(function(){
		// ******************************* Các sự kiện trên PC **********************************

		// **************************** Header PC  *******************************
		// Click thì show khu vực mua hàng (location)
		$('.js-locationBtn').click(function(){
			$('.menu-branch-search-location-select').toggleClass(" menu-branch-search-location-select--active");
		});

		// Click chọn khu vực trên khung tìm kiếm thì đổi chữ 
		$('.js-locationOption').click(function(){
			var mLocation = $(this).find('span').text();
			$('.menu-branch-search-location__txt').text(mLocation);
		});


		// // ********************** menu cố đinh ********************
		// Click mở thanh menu cố định
		$('.js-menuBtn').click(function(){
			$('.nav-reponsive').slideToggle('show');		
		});	

		// // hover vào tên hản lap top thì hiện sản phẩm 
		$('.js-hover').hover(function(){
			var mchildren = $(this).children('.nav-reponsive-container-list-item-sub');
			$(mchildren).toggle();
		});

		// //hover ra body thì nav đóng 
		$('.Container').hover(function(){
			$('.nav-reponsive').hide();
		});


		// ********************* menu  động **********************
		// Click mở thanh menu động ( duy chuyen theo scroll)
		$('.js-navBtn').click(function(){
			$('.nav-reponsive').addClass('nav-reponsive--acctive');
			$('.nav-reponsive').slideToggle('show');	
		});


		// **************************** Container  *******************************
		//************* Banner  ************
		//Tính chiều cao cho  Carounsel-content
		
		$(window).on('load resize',function(){
			var mWidth = $('.js-Carousel').width();
			var mHeight = mWidth/1.6363;
			$('.js-CarouselCtx').height(mHeight);
		});

		//Hàm để scroll ảnh trên banner
		var currentItem = 1;
		var itemLength = $('.js-carouseList .Carousel-content-list-item').length;
		var isScrolling = false ;

		function scrollCarousel(index) {
			isScrolling = true ;
			// Xoa/thêm class Carousel-nav-item--active cho .js-carouselNavItem đang được chọn
			$('.Carousel-nav-item--active').removeClass('Carousel-nav-item--active');
			$('.js-carouselNavItem[data-index='+index+']').addClass('Carousel-nav-item--active');
			var carouselItem = $('#Carousel_'+index);
			$('.js-carouseList').animate({'left':0-carouselItem.position().left},400,function(){
				isScrolling = false;
			});
		}

		// Click vào js-carouselNavItem thì Carousel-content-list-item sẻ duy chuyễn
		$('.js-carouselNavItem').click(function(){
			// Hiện màu cho .js-carouselNavItem đang được chọn
			if ($(this).hasClass('Carousel-nav-item--active')) {
				return;
			}
			var index = $(this).attr('data-index');
			currentItem = index;
			scrollCarousel(currentItem);
		});

		//Click vào js-carouselBtn thì Carousel-content-list-item sẻ duy chuyễn		
		$('.js-carouselBtn').click(function(){
			if (isScrolling) {
				return;  
			}
			if ($(this).hasClass('Carousel-content__btn--right')) {
				currentItem++;
			} else {
				currentItem--;
			}
			if (currentItem > itemLength) {
				currentItem = 1;
			} else if (currentItem < 1) {
				currentItem = itemLength;
			}

			scrollCarousel(currentItem);
		});

  


		// ******************************* Các sự kiện trên SP ****************************************

		// **************************** Header SP  *******************************
		//click vào hamburber thì chuyển thành chữ X
		$('.js-sp-navBtn').click(function(){
			$('.sp-menu').toggleClass('sp-menu--active');
			$('.sp-menu-background').slideToggle('show');
			$('.sp-menu-nav').slideToggle('show');
			//Khi mở nav trên sp thì ko được scroll
			if ($('.sp-menu').hasClass('sp-menu--active')) {
				$('body').addClass('NoScroll');
			}
			else {
				$('body').removeClass('NoScroll');
			}
		});



		// ******************************* Sự kiện khi Scroll Window **********************************
		// Đóng thanh menu cố định khi scroll cửa windows
		$(window).scroll(function(){
			if($(this).scrollTop() > 0)
			{
				$('.menu-branch').addClass('menu-branch-flex');
				$('.menu-branch-logo-current').addClass('menu-branch-logo-current--active');
				$('.menu-branch-logo-hiden').addClass('menu-branch-logo-hiden--active');
				$('.nav-reponsive').hide();
			}
		});

		// Khi scroll windows về header thì hiện lại thanh login.
		$(window).scroll(function(){
			if($(this).scrollTop() <= 1)
			{
				$('.menu-branch').removeClass('menu-branch-flex');
				$('.nav-reponsive').removeClass('nav-reponsive--acctive');
				$('.menu-branch-logo-current').removeClass('menu-branch-logo-current--active');
				$('.menu-branch-logo-hiden').removeClass('menu-branch-logo-hiden--active');
			}	$('.nav-reponsive-container').removeClass('nav-reponsive--acctive');
		});		
	});
})(jQuery);