<?php include('head.html'); ?>

<?php
	$page_title = 'Keenland Yearling';
	$page_sub_title = 'September 2014';
?>

<body class="page-add-user">

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="card card-simple">
							<header class="header">
								<div class="title"><span>Horses</span></div>
							</header>
							<div class="content">
								<table class="grid">
									<thead>
										<tr>
											<th class="date caps center"><strong>Sale Date</strong></th>
											<th class="year caps">Hip</th>
											<th class="name caps">Name</th>
											<th class="seen caps">Sex</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="center"><strong>9/20</strong></td>
											<td>200</td>
											<td>14' Good Child</td>
											<td>F</td>
										</tr>
										<tr>
											<td class="center"><strong>9/20</strong></td>
											<td>205</td>
											<td>‘14 Fall Focus</td>
											<td>F</td>
										</tr>
										<tr>
											<td class="center"><strong>9/20</strong></td>
											<td>210</td>
											<td>‘14 Cary’s Carrie</td>
											<td>F</td>
										</tr>
										<tr>
											<td class="center"><strong>9/21</strong></td>
											<td>215</td>
											<td>‘14 Crocoun Deal</td>
											<td>F</td>
										</tr>
										<tr>
											<td class="center"><strong>9/21</strong></td>
											<td>220</td>
											<td>‘14 Minor Miner</td>
											<td>F</td>
										</tr>
										<tr>
											<td class="center"><strong>9/21</strong></td>
											<td>225</td>
											<td>‘14 How Far</td>
											<td>F</td>
										</tr>
									</tbody>
								</table>
							</div>

							<footer class="center">
								<div class="row card-action">
									<div class="col-xs-12">
										<div class="btn btn-blue submit caps btn-drop">+ Add a Horse</div>
									</div>
								</div>
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
//			$('#myModal').modal('show');
		});
	</script>

</body>
</html>
