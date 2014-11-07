<?php include('head.html'); ?>

<?php
	$page_title = 'Horse Information';
	$page_sub_title = 'September 2014';
?>

<body class="page-horses">

	<div class="modal fade list" id="lookers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-3 col-md-5">
							<h4 class="modal-title" id="myModalLabel">Lookers</h4>
						</div>
						<div class="col-xs-9 col-md-7">
							<button type="button" class="btn btn-white btn-small pull-left">Add Looker</button>
							<button type="button" class="btn btn-white btn-small pull-right" data-dismiss="modal"><span aria-hidden="true">Done</span><span class="sr-only">Close</span></button>
						</div>
					</div>
				</div>
				<div class="modal-body full-width">
					<table class="filter">
						<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Looker</th>
							<th># of Looks</th>
							<th class="center">Notes</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>9/19</td>
							<td>9:05</td>
							<td>Andrea Traber</td>
							<td>2</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						<tr>
							<td>9/19</td>
							<td>9:05</td>
							<td>Andrea Traber</td>
							<td>2</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						<tr>
							<td>9/19</td>
							<td>9:05</td>
							<td>Andrea Traber</td>
							<td>2</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						<tr>
							<td>9/19</td>
							<td>9:05</td>
							<td>Andrea Traber</td>
							<td>2</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade list" id="vet-work" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-3 col-md-5">
							<h4 class="modal-title" id="myModalLabel">Vet Work</h4>
						</div>
						<div class="col-xs-9 col-md-7">
							<button type="button" id="add-vet-work" class="btn btn-white btn-small pull-left">Add Vet Work</button>
							<button type="button" class="btn btn-white btn-small pull-right" data-dismiss="modal"><span aria-hidden="true">Done</span><span class="sr-only">Close</span></button>
						</div>
					</div>
				</div>
				<div class="modal-body full-width">
					<table class="filter brown">
						<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Vet</th>
							<th>Procedure</th>
						</tr>
						</thead>
						<tbody>
						<tr class="noborder">
							<td>6/5</td>
							<td>9:05</td>
							<td>Dr. M Hubbard</td>
							<td>Scope</td>
						</tr>
						<tr>
							<td colspan="4">
								<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus libero in turpis auctor accumsan. Vivamus lorem enim, ultrices in magna non, pulvinar mattis lacus.</small>
							</td>
						</tr>
						<tr class="noborder">
							<td>6/5</td>
							<td>9:05</td>
							<td>Dr. M Hubbard</td>
							<td>Scope</td>
						</tr>
						<tr>
							<td colspan="4">
								<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus libero in turpis auctor accumsan. Vivamus lorem enim, ultrices in magna non, pulvinar mattis lacus.</small>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="card">
							<header class="header">
								<div class="title"><span class="white">14' Good Child</span></div>
							</header>
							<div class="content">
								<table class="split">
									<tbody>
										<tr>
											<td>Description:</td>
											<td>Chestnut Colt</td>
										</tr>
										<tr>
											<td>Out of:</td>
											<td>Good Child</td>
										</tr>
										<tr>
											<td>By:</td>
											<td>Seattle Eclipse</td>
										</tr>
										<tr>
											<td>Born on:</td>
											<td>Feb 21, 2014</td>
										</tr>
										<tr>
											<td>Owned by:</td>
											<td>Mike Jemison</td>
										</tr>
										<tr>
											<td>Hip Number:</td>
											<td>200</td>
										</tr>
										<tr>
											<td>Sells on:</td>
											<td>Sept 20, 2014</td>
										</tr>
									</tbody>
								</table>
							</div>

							<footer class="center split-button sticky">
								<button class="btn btn-brown caps" data-toggle="modal" data-target="#">Pedigree</button>
								<button class="btn btn-brown caps" data-toggle="modal" data-target="#">Updates</button>
								<button class="btn btn-brown caps" data-toggle="modal" data-target="#lookers">Lookers</button>
								<button class="btn btn-brown caps" data-toggle="modal" data-target="#vet-work">Vet Work</button>
							</footer>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php include('footer.html');?>

	<script type="text/javascript">
		$(document).ready(function() {
			var markup = '<tr class="noborder"><td>Date</td><td>Time</td><td>Doctor</td><td>Scope</td></tr><tr><td colspan="4"><small>Add description</small></td></tr>';

			$('#add-vet-work').click(function(){
				$('#vet-work table tbody').append(markup);
			});
		});
	</script>

</body>
</html>
