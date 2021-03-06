$(document).ready(function(){
	var baseUrl = ROOT_URL + '/';
	/*
	|-----------------------------------------------------------------------------
	| MENU FROM SCROLL
	|-----------------------------------------------------------------------------
	*/
	$(window).scroll(function (e) {
		var s = $('body').scrollTop();
		if(s>200){
			$('nav.header-fixed').addClass('shown');
		}else{
			$('nav.header-fixed').removeClass('shown');
		}
	});


	$(document).ready(function(){
		$("form").validationEngine();
	});

	/*
	|-----------------------------------------------------------------------------
	| Slider
	|-----------------------------------------------------------------------------
	*/

	$('#homeSlider .next').on('click', function(e){
		e.preventDefault();
		var slider = $(this).closest('.slider');
		var numofSldies = slider.find('.item').length;
		var activeItem = slider.find('.active');
		var nextActiveIndex;
		if(activeItem.index() == numofSldies-1){
			nextActiveIndex = 0;
		}else{
			nextActiveIndex = activeItem.index() +1;
		}


		activeItem.css('z-index', 0);
		activeItem.removeClass('active');

		slider.find('.item').eq(nextActiveIndex).css('z-index', 1);
		slider.find('.item').eq(nextActiveIndex).addClass('active');
		console.log(slider.find('.item').eq(nextActiveIndex));
	});

	$('#homeSlider .prev').on('click', function(e){
		e.preventDefault();
		var slider = $(this).closest('.slider');
		var numofSldies = slider.find('.item').length;
		var activeItem = slider.find('.active');
		var nextActiveIndex;
		if(activeItem.index() === 0){
			nextActiveIndex = numofSldies-1;
		}else{
			nextActiveIndex = activeItem.index() -1;
		}


		activeItem.css('z-index', 0);
		activeItem.removeClass('active');

		slider.find('.item').eq(nextActiveIndex).css('z-index', 1);
		slider.find('.item').eq(nextActiveIndex).addClass('active');
		console.log(slider.find('.item').eq(nextActiveIndex));
	});


	/*
	|-----------------------------------------------------------------------------
	| PRODUCT SLIDER
	|-----------------------------------------------------------------------------
	*/
	var prodImgNum = $('.productSlider img').length;
	var currentProdImg = 0;
	$('.productSlider img').eq(currentProdImg).addClass('show');
	$(document).on('click', '.productSlider .next', function(e){
		e.preventDefault();
		$('.productSlider img').eq(currentProdImg).removeClass('show');
		if(currentProdImg == prodImgNum-1){
			currentProdImg = 0;
		}else{
			currentProdImg++;
		}
		$('.productSlider img').eq(currentProdImg).addClass('show');
	});
	$(document).on('click', '.productSlider .prev', function(e){
		e.preventDefault();
		$('.productSlider img').eq(currentProdImg).removeClass('show');
		if(currentProdImg == 0){
			currentProdImg = prodImgNum-1;
		}else{
			currentProdImg--;
		}
		$('.productSlider img').eq(currentProdImg).addClass('show');
	});

	/*
	|-----------------------------------------------------------------------------
	| SHOW HIDE CART
	|-----------------------------------------------------------------------------
	*/
	var accountWidget = $('.accountWidget');
	accountWidget.find('.cartBtn').on('click', function(e){
		e.preventDefault();
		$(e.currentTarget).toggleClass('shown');
		accountWidget.find('.hidden').toggleClass('showIt');
	});

	$(document).on('click', '.addToCartBtn', function(e){
		e.preventDefault();
		var id = $(e.currentTarget).data('id');
		$.ajax({
			url: baseUrl + 'cart/addItem/'+id,
			type: 'POST',
			success:function(data){
				window.location.reload();
			}
		})
	});


	/*
	|-----------------------------------------------------------------------------
	| LOGINMODAL
	|-----------------------------------------------------------------------------
	*/

	$(document).on('click', '#loginForm .recoverBtn', function(){
		$('#loginForm').hide(0);
		$('#recoverForm').show(0);
		$('#loginLabel').hide();
		$('#rocoverLabel').show();
	});
	$(document).on('click', '#recoverForm .loginBtn', function(){
		$('#loginForm').show(0);
		$('#recoverForm').hide(0);
		$('#loginLabel').show();
		$('#rocoverLabel').hide();
	});	
	$(document).on('click', '#recoverForm .loginBtn', function(){
		$('#loginForm').show(0);
		$('#recoverForm').hide(0);
		$('#loginLabel').show();
		$('#rocoverLabel').hide();
	});





	$(document).on('click', '.removeItem', function(e){
		console.log(e);
		confirm();
	})

});


/*
|-----------------------------------------------------------------------------
| *******************CART
|-----------------------------------------------------------------------------
*/

window.Cart = {
	Models: {},
	Collections: {},
	Views: {},
	Routers: {}
};

var MainRouter = Backbone.Router.extend({
	initialize: function(){
		console.log('routeeeer');
	},
	routes: {
		'': 'index'
	},
	index: function(){
		console.log('indexxxx');
	}
});
// Collections

new MainRouter();