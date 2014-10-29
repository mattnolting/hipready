<?php include('head.html'); ?>

<?php $page_title = 'New User'; ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content center">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<div class="modal-body">
				<h2 class="green light nomargin-top">Welcome to HipReady</h2>
				<hr />
				<h2 class="blue light"><b>Please Check Your Email</b><br />A confirmation email is on the way.</h2>
			</div>
		</div>
	</div>
</div>

<body class="page-new-user">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form action="">
					<div class="row">
						<div class="col-sm-12">
							<input type="text" placeholder="Consignor / Consignment*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" placeholder="First Name*" />
						</div>
						<div class="col-sm-6">
							<input type="text" placeholder="Last Name*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" placeholder="Phone Number*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" placeholder="Email*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" placeholder="Password*" />
						</div>
						<div class="col-sm-6">
							<input type="text" placeholder="Confirm Password*" />
						</div>
					</div>
					<div class="row center">
						<div class="col-sm-12">
							<a href="3-my-account.php" class="btn btn-circle submit"><span>Create</span> Account</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>

	<?php include('footer.html');?>

	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout('$("#myModal").modal("show")', 400);
		});
	</script>
</body>
</html>
