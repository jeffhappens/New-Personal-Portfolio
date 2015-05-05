$(function() {

	$('.alert').delay(3000).fadeOut();

	$('.project').on('click', function() {
		var projectid = $(this).data('projectid');
		$.ajax({
			type: 'GET',
			url: '/api/projects/'+projectid
		}).done(function(response) {
			var source = $("#project-template").html();
			var template = Handlebars.compile(source);
			$('.template').html(template(response)).addClass('open');
			$('body').addClass('disable-scroll');
		});
	});
	$(document).on('click', '.close', function() {
		console.log( $(this) );
		$('.template').removeClass('open');
		$('body').removeClass('disable-scroll');
	})
});