<?php include('head.html'); ?>

<?php $page_title = 'About HipReady'; ?>

<body class="page-my-account">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="block-content block-fancy">
					<p>Created out of a love for the sales, HipReady is
						a web-based platform that is being ever improved
						to help sales’ consignors stay organized, save
						time and provide a better service to their clients.
					</p>

					<p>
						If at any point, you feel as though there is a way
						to improve HipReady, please reach out and
					</p>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="btn-group btn-group-clear full-width center">
					<a href="add-billing.php" class="btn btn-clear">Add Billing Details</a>
					<a href="add-user.php" class="btn btn-clear">Add Account User</a>
					<a href="change-password.php" class="btn btn-clear">Change Password</a>
				</div>
			</div>
		</div>
	</main>

	<?php include('footer.html');?>

	<script type="text/javascript">
		$(document).ready(function() {
//			$('#myModal').modal('show');
		});
	</script>

</body>
</html>
