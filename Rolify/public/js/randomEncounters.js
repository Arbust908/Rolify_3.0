$(document).on('click', '.generar', function() {
	$.ajax({
		url: window.location.href,
		type: 'GET',
	})
	.done(function(data) {
		cambiarTexto(JSON.parse(data));
	})
	.fail(function(data) {
		console.log(data);
	})

});

function cambiarTexto(data) {
	$.each(data, function(index, el) {
		$('.text[data-index="' + index + '"]').text(el.value);
	});
}
