$(document).ready(function () {
	//confirm delete
	$(document.body).on('submit', 'js-confirm', function () {
		var $el = $(this)
		var text = $el.data('confirm') ? $el.data('confirm') : 'Anda Yakin Melakukan Tindakan Ini?'
		var c = confirm(text);
		return c;
		//add selectize
		$('.js-selectize').selectize({
			sortField: 'text'
		});
	});
});