<?php include('head.html'); ?>

<?php $page_title = 'My Account'; ?>

<body class="page-my-account">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="block-content block-user center">
					<h1>Sweezey Morrell Sales</h1>
					<hr />
					<h2>Wayne Sweezey</h2>
					<div class="email">m@m.com</div>
					<div class="phone"><em>859.221.5422</em></div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="btn-group btn-group-clear full-width center">
					<a href="add-billing.php" class="btn btn-clear">Add Billiing Details</a>
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
