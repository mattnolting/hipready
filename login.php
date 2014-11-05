<?php include('head.html'); ?>

<body class="page-login">

	<?php $show_logo = 'false'; ?>
	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-xs-12 center">
				<img class="logo" src="assets/img/l_hipready.png" alt="HipReady" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<form action="">
					<div class="row">
						<div class="col-xs-12">
							<input type="text" placeholder="Username" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="text" placeholder="Password" />
						</div>
					</div>
					<div class="row center">
						<div class="col-sm-12">
							<a href="3-my-account.php" class="btn btn-circle submit">
								<div>
									<span>Login</span>
								</div>
							</a>
						</div>
					</div>
				</form>
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
