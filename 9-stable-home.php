<?php include('head.html'); ?>

<?php $page_title = 'Sweezey Morrell Sales'; ?>

<body class="page-add-user">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page more-pad" role="main">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="label">Cards</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="btn-group btn-group-block">
							<a href="12-cards.php" class="btn submit round">Start New Card<i class="fa fa-angle-right"></i></a>
							<a href="12-cards.php" class="btn submit round">View All Open Cards<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h2 class="label">Sales</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="btn-group btn-group-block">
							<div class="btn submit round">View Current Sale<i class="fa fa-angle-right"></i></div>
							<div class="btn submit round">View My Upcoming Sales<i class="fa fa-angle-right"></i></div>
							<div class="btn submit round">Subscribe to New Sale<i class="fa fa-angle-right"></i></div>
							<div class="btn submit round">View Past Sales<i class="fa fa-angle-right"></i></div>
						</div>
					</div>
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
