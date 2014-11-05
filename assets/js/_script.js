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

	function selectTr() {
		$('.selectable tr').click(function(){
			$(this).toggleClass('selected');
			$(this).find('.btn').toggleClass('active');
		});
	}

	selectTr();

	function add() {
		var row = '<tr class="selected"><td>Hip#</td><td>Year</td><td>Horse</td><td><button class="btn btn-blue active">To See</button><button class="btn btn-green">Choose</button></td></tr>';

		$('.btn#add-horse').click(function(){
			$('#horses').append(row);
		});
	}

	add();

	function editable() {
		$('.selectable td').click(function(){
			$(this).toggleClass('active');

			if ($('.selectable td.editable').hasClass('active')) {
				$(this).attr('contenteditable','true').css({ 'background': '#fff' });
			}
			else {
				$(this).attr('contenteditable','false').css({ 'background': 'none' });
			}
		});
	}

	editable();

	var note = '<div class="note">Notes...<br /><a class="remove-note">- Remove Note</a></div>';
	$('.modal .btn#add-note').click(function(){
		$('#add-horse .content').append(note);
	});

	$('.remove-note').click(function(){
		$(this).parent().remove();
		console.log('test');
	});
});
