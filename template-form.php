<?php include('head.html'); ?>

<?php $page_title = 'Name'; ?>

<body class="page-home">

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
							<div class="btn submit">Create Account</div>
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
