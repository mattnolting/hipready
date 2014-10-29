<?php include('head.html'); ?>

<?php
	$page_title = 'Keenland Yearling';
	$page_sub_title = 'September 2014';
?>

<div class="modal fade list" id="looker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="row">
					<div class="col-xs-6">
						<h4 class="modal-title" id="myModalLabel">Looker: Evan Bee</h4>
					</div>
					<div class="col-xs-6">
						<button type="button" class="close btn btn-white" data-dismiss="modal"><span aria-hidden="true">Done</span><span class="sr-only">Close</span></button>
					</div>
				</div>
			</div>
			<div class="modal-body full-width">
				<table class="filter brown">
					<thead>
					<tr>
						<th>Date</th>
						<th>Hip</th>
						<th>Looker</th>
						<th>Sex</th>
						<th class="center">Looks</th>
						<th class="center">Notes</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>9/19</td>
							<td>200</td>
							<td>'14 Good Child</td>
							<td>F</td>
							<td class="center">1</td>
							<td class="center"><i class="fa fa-bookmark-o" data-link="target1"></i></td>
						</tr>
						<tr class="toggle" data-target="target1">
							<td colspan="6">
								<table>
									<tbody>
										<tr>
											<td class="note">
												<strong>Kathy Says:</strong> &nbsp;2nd Look, asked for several up and backs, many notes, stuck around after.  And came back again later.
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td>9/19</td>
							<td>400</td>
							<td>‘14 Crocdun Deal</td>
							<td>F</td>
							<td class="center">1</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						<tr>
							<td>9/20</td>
							<td>200</td>
							<td>'14 Good Child</td>
							<td>F</td>
							<td class="center">1</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
						<tr>
							<td>9/20</td>
							<td>200</td>
							<td>'14 Good Child</td>
							<td>F</td>
							<td class="center">1</td>
							<td class="center"><i class="fa fa-bookmark-o"></i></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<body class="page-add-user">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="card card-simple">
							<header class="header">
								<div class="title"><span>Lookers</span></div>
							</header>
							<div class="content">
								<table class="grid">
									<thead>
										<tr>
											<th class="date caps"><strong>My Lookers</strong>&nbsp;/&nbsp;<span class="brown">All Lookers</span></th>
											<th class="year caps center">Looks</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Bee, Evan</strong>
											</td>
											<td class="center">4</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Doe, Tom</strong>
											</td>
											<td class="center">2</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Gall, Shelly</strong>
											</td>
											<td class="center">5</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Moore, Lizzy</strong>
											</td>
											<td class="center">3</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Nomero, Sean</strong>
											</td>
											<td class="center">2</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-info-circle" data-toggle="modal" data-target="#looker"></i>
												<strong>Lee, Opal</strong>
											</td>
											<td class="center">1</td>
										</tr>
									</tbody>
								</table>
							</div>
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
//			$('#myModal').modal('show');
		});
	</script>

</body>
</html>
