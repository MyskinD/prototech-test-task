$(document).ready(function () {

	$('body').on('click', '#example', function (e) {
		$(this).css('background', '#0000FF');
	});

	$('body').on('click', '.inner', function (e) {
		e.stopPropagation();
		var bg = $('#example').css('background');
		$('.modal-content').css('background', bg);
		$('.modal').css('display', 'block');
	});

	$('body').on('click', '.close', function (e) {
		e.stopPropagation();
		$('.modal').css('display', 'none');
		$('.inner').addClass('end');
	});

});