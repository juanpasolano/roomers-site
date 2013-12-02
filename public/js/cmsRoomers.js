$(document).ready(function(){

	$.fn.serializeObject = function()
			{
				var o = {};
				var a = this.serializeArray();
				$.each(a, function() {
					if (o[this.name] !== undefined) {
						if (!o[this.name].push) {
							o[this.name] = [o[this.name]];
						}
						o[this.name].push(this.value || '');
					} else {
						o[this.name] = this.value || '';
					}
				});
				return o;
			};



	$('.select2Multiple').select2();

	/*$(document).on('submit', '#createProductForm', function(e){
		// e.preventDefault();
		var d = $(e.currentTarget).serializeObject();
		console.log(d);
		$.ajax({
			url: 'http://localhost:8000/cms/products',
			data: d,
			type: 'POST',
			success: function(d){
				console.log(d);
			}
		})
	});

	$(document).on('submit', '#createTaxForm', function(e){
		e.preventDefault();
		var d = $(e.currentTarget).serializeObject();
		$(e.currentTarget).find('.loadMsg').show();
		console.log(d);
		$.ajax({
			url: 'http://localhost:8000/cms/taxes',
			data: d,
			type: 'POST',
			success: function(d){
				console.log(d);
				window.location.reload();
			}
		})
	});

	$(document).on('submit', '#createCollectionForm', function(e){
		e.preventDefault();
		var d = $(e.currentTarget).serializeObject();
		$(e.currentTarget).find('.loadMsg').show();
		console.log(d);
		$.ajax({
			url: 'http://localhost:8000/cms/collections',
			data: d,
			type: 'POST',
			success: function(d){
				console.log(d);
				window.location.reload();
			}
		})
	});

	$(document).on('submit', '#createCategoryForm', function(e){
		e.preventDefault();
		var d = $(e.currentTarget).serializeObject();
		$(e.currentTarget).find('.loadMsg').show();
		console.log(d);
		$.ajax({
			url: 'http://localhost:8000/cms/categories',
			data: d,
			type: 'POST',
			success: function(d){
				console.log(d);
				window.location.reload();
			}
		})
	});*/

});