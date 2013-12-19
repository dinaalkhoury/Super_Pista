// JavaScript Document

$('form.ajax') .on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {};
		
	that.find('[name]').each(function(index, value) {
		var that = $(this)
			name = that.attr('name'),
			value = that.val();
			
		data[name] = value;
	});
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			window.location.replace(response);
			//var modify = document.getElementById('update');
			console.log(response);
			//modify.innerHTML = response;
		}
	});
	
	return false;
});

var myNewElement = document.createElement("body");

