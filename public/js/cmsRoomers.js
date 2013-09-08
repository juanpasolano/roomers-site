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



	$('.selectMultiple').select2();

	$(document).on('submit', '#createProductForm', function(e){
		e.preventDefault();
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




});