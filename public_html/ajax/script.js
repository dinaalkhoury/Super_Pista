$.getJSON('data.json', function(data){
	var output = '<ul>';
	$.each(data, function(key, val) {
		output += '<li>' + val.bio + '</li>';
		
	});
	$('#update').html(output);
});