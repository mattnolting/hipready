<?php include('head.html'); ?>

<?php $page_title = 'Add Billing'; ?>

<body class="page-add-billing">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page more-pad" role="main">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form action="">
					<div class="row">
						<div class="col-sm-12">
							<label>Billing Address</label>
							<input class="" type="text" placeholder="Street Address*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<input class="" type="text" placeholder="City*" />
						</div>
						<div class="col-sm-2">
							<input class="" type="text" placeholder="St*" />
						</div>
						<div class="col-sm-4">
							<input class="zip" type="text" placeholder="Zip*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<label>Credit Card</label>
							<input class="" type="text" placeholder="Name on Card*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input class="" type="text" placeholder="Card Number*" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<input class="" type="text" placeholder="Exp*" />
						</div>
						<div class="col-sm-6">
							<input class="zip" type="text" placeholder="CVV*" />
						</div>
					</div>
					<div class="row center">
						<div class="col-sm-12">
							<a href="3-my-account.php" class="btn btn-circle submit">
								<div>
									<span>Confirm</span> Information
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
