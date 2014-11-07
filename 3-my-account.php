<?php include('head.html'); ?>

<?php $page_title = 'My Account'; ?>

<body class="page-my-account">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page more-pad" role="main">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
				<div class="block-content block-user center">
					<span class="edit"><i class="fa fa-pencil"></i></span>
					<h1>Sweezey Morrell Sales</h1>
					<hr />
					<h2>Liz Morrell</h2>
					<div class="email">elizabeth.sweezey@gmail.com</div>
					<div class="phone"><em>202-341-1101</em></div>
					<div class="row btn-group-block">
						<div class="col-sm-6">
							<a href="9-stable-home.php" class="btn btn-blue center">My Consignment</a>
						</div>
						<div class="col-sm-6">
							<a href="12-cards.php" class="btn btn-blue center">My Cards</a>
						</div>
					</div>

					<div class="btn btn-blue btn-edit">Done Editing</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 center">
<!--				<a href="5-add-billing.php" class="btn btn-circle nomargin"><div><b>Billing</b></div></a>-->
				<a href="4-add-user.php" class="btn btn-circle nomargin"><div><b>Add User</b></div></a>
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
