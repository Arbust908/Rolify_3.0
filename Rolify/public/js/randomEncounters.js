$(document).on('click', '.generateEncounter', function() {
	$.ajax({
		url: window.location.href,
		type: 'GET',
	})
	.done(function(data) {
		// console.log("success");
		cambiarTexto(JSON.parse(data));
	})
	.fail(function(data) {
		// console.log("error");
		console.log(data);
	})
	.always(function(data) {
		// console.log("complete");
	});

});

function cambiarTexto(data) {
	$.each(data, function(index, el) {
		$('.text[data-index="' + index + '"]').text(el.string);
	});
}
