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

	$(document).on('click', '.addDimension', function(e){
		e.preventDefault();
		var clonned = $( ".dimensionClone" ).clone();
		clonned.removeClass('dimensionClone');
		clonned.removeAttr('style');
		clonned.find('select').attr('name', 'dimensions_id[]');
		clonned.find('input').attr('name', 'dimensions_value[]');
		$('.dimensionsBox').append(clonned);
		console.log(clonned);
	});

	$(document).on('click', '.removeDimension', function(e){
		e.preventDefault();
		var r = confirm("Are you sure you want to delete this dimension?");
		if (r == true)
		{
			$(e.currentTarget).parent('.dimensionItem').remove();
		}
	});

});