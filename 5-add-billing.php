<?php include('head.html'); ?>

<?php $page_title = 'Add Billing'; ?>

<body class="page-add-billing">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
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
							<div class="btn btn-circle submit"><span>Confirm</span> Card</div>
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
