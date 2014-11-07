<?php include('head.html'); ?>

<?php $page_title = 'Create New Card'; ?>

<body class="page-card">

	<div class="modal fade list add" id="add-horse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn btn-white btn-small pull-right" data-dismiss="modal"><span aria-hidden="true">Done</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Add Horse to Card</h4>
				</div>
				<div class="filters">
					<span>Filter Horses</span>
					<ul>
						<li class="active">All Horses</li>
						<li>Colts</li>
						<li>Fillies</li>
						<li>9/20</li>
						<li>9/21</li>
					</ul>
				</div>
				<div class="modal-body">
					<table class="selectable">
						<tr class="selected">
							<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
							<td>400</td>
							<td>'14</td>
							<td>Crocdundeal (f)</td>
						</tr>
						<tr>
							<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
							<td>405</td>
							<td>'14</td>
							<td>Crocdundeal (f)</td>
						</tr>
						<tr class="selected">
							<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
							<td>410</td>
							<td>'14</td>
							<td>Crocdundeal (f)</td>
						</tr>
						<tr>
							<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
							<td>415</td>
							<td>'14</td>
							<td>Crocdundeal (f)</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade list" id="add-note" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn btn-white btn-small pull-right" data-dismiss="modal"><span aria-hidden="true">Done</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Add Note</h4>
				</div>
				<div class="modal-body">
					<textarea>Lorem ipsum dolor sit...
					</textarea>
				</div>
			</div>
		</div>
	</div>

	<?php include('page-nav.php'); ?>

	<main class="wrap container page" role="main">
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10">
				<div class="card">
					<header class="header">
						<span class="edit"><i class="fa fa-pencil"></i></span>
						<div class="title"><span>Sweezey Morrell Sales</span></div>
						<h2 class="line-through"><span>Keeneland September</span></h2>
						<select name="" id="" class="chosen-select" value="Add Looker">
							<option value="Add Looker">+ Add Looker</option>
							<option value="Jon Gruden">Jon Gruden</option>
							<option value="Dez Bryant">Dez Bryant</option>
						</select>
<!--						<h3><strong>Looker: <a href="#">Add Looker</a></strong></h3>-->
<!--						<h3><strong>Looker: Jon Gruden</a></strong>&nbsp;<a href="#"><i class="fa fa-times"></i></a></h3>-->
						<!-- Button trigger modal -->
						<button class="btn btn-blue" data-toggle="modal" data-target="#add-horse">+ Add Horse</button>
					</header>
					<div class="content">
						<table class="selectable">
							<thead>
								<tr>
									<th class="date">9/20</th>
									<th class="year invisible">Year</th>
									<th class="name invisible">Name</th>
									<th class="seen regular">Seen</th>
								</tr>
							</thead>
							<tbody>
								<tr class="seen">
									<td>200</td>
									<td>14</td>
									<td>Good Child(f)</td>
									<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
								</tr>
								<tr class="seen">
									<td>205</td>
									<td>14</td>
									<td>Good Child(f)</td>
									<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
								</tr>
							</tbody>
						</table>

						<table class="selectable">
							<thead>
								<tr>
									<th class="date">9/20</th>
									<th class="year invisible">Year</th>
									<th class="name invisible">Name</th>
									<th class="seen regular">Seen</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>400</td>
									<td>14</td>
									<td>Crocdundeal (f)</td>
									<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
								</tr>
								<tr>
									<td>405</td>
									<td>14</td>
									<td>Minor Miner (f)</td>
									<td><i class="fa fa-check-circle"></i><i class="fa fa-minus-circle"></i></td>
								</tr>
							</tbody>
						</table>
						<div class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, architecto, aspernatur at cupiditate fugit hic iste laborum nemo nihil numquam odit quae quas quidem ratione recusandae rem vel vero voluptatibus!</div>

					</div>

					<footer class="center">
						<div class="row">
							<div class="col-xs-12">
								<button class="btn btn-brown" data-toggle="modal" data-target="#add-note">+ Add Note</button>
							</div>
						</div>
						<div class="row card-action">
							<div class="col-xs-12">
								<div class="btn btn-blue submit caps">Submit to Open Cards</div>
							</div>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</main>

	<?php include('footer.html');?>

</body>
</html>
