<?php include('head.html'); ?>

<?php $page_title = 'New User'; ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content center">
			<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			<div class="modal-body">
				<h2 class="green light nomargin-top">Welcome to HipReady</h2>
				<hr />
				<h2 class="blue light smaller"><strong>Please Check Your Email</strong></h2>
				<h3 class="blue light smaller">A confirmation email is on the way.</h3>
			</div>
		</div>
	</div>
</div>

<body class="page-new-user">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page more-pad" role="main">
		<div class="row">
			<form class="col-sm-8 col-sm-offset-2">
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
						<a href="3-my-account.php" class="btn btn-circle submit">
							<div>
								<span>Create</span> Account
							</div>
						</a>
					</div>
				</div>
			</form>
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
