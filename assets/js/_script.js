jQuery(document).ready(function($) {
	$(".chosen-select").chosen({width: "100%"});

	$('[data-link]').click(function(){
		var target = $(this).attr('data-link');
		$(this).toggleClass('active').parent().parent().toggleClass('active');
		$('[data-target="' + target + '"]').toggle();
	});

	var docHeight = $(document).outerHeight();
	$('.st-menu-open .st-pusher::after').height(docHeight);

	function checkBlock() {
		if ($('.block-content .edit').hasClass('active')) {
			$("h1, h2, div:not('.btn'), :not('.btn-group-block')").attr('contenteditable','true');
		}
		else {
			$("h1, h2, div:not('.btn'), div:not('.btn-group-block')").attr('contenteditable','false');
		}
	}

	function editBlock() {
		$('.block-content .edit').click(function(){
			$(this).toggleClass('active');
			$('.btn-edit').toggle();

			checkBlock();
		});

		$('.btn-edit').click(function(){
			$(this).hide();
			$('.block-content .edit').removeClass('active');

			checkBlock();
		});
	}

	editBlock();

	function add() {
		$('.selectable tr').click(function(){
			$(this).toggleClass('selected');
		});
	}

	add();
});
