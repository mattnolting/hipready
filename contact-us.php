<?php include('head.html'); ?>

<?php $page_title = 'Contact Us'; ?>

<body class="page-contact-us">

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
				<div class="col-sm-12">
					<input type="text" placeholder="Password*" />
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" placeholder="Confirm Password*" />
				</div>
			</div>
			<div class="row center">
				<div class="col-sm-12">
					<a href="3-my-account.php" class="btn btn-circle submit">
						<div>
							<span>Submit</span>
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
