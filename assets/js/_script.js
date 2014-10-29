jQuery(document).ready(function($) {
	$(".chosen-select").chosen({width: "100%"});

	$('[data-link]').click(function(){
		var target = $(this).attr('data-link');
		$(this).toggleClass('active').parent().parent().toggleClass('active');
		$('[data-target="' + target + '"]').toggle();
	});
});
