<?php include('head.html'); ?>

<?php $page_title = 'Your Cards'; ?>

<div class="modal fade list" id="add-horse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card">
				<header class="header">
					<span class="edit"><i class="fa fa-pencil"></i></span>
					<div class="title"><span>Timbertown Stables</span></div>
					<h2 class="line-through"><span>Keenland September</span></h2>
					<select name="" id="" class="chosen-select" value="Add Looker">
						<option value="Add Looker">+ Add Looker</option>
						<option value="Jon Gruden">Jon Gruden</option>
						<option value="Dez Bryant">Dez Bryant</option>
					</select>
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
</div>

<body class="page-cards">

	<?php include('page-nav.php'); ?>
	<main class="wrap container page layout-grid" role="main">
		<div class="row">
			<div class="col-sm-12 center">
				<button data-toggle="modal" data-target="#add-horse" class="btn btn-white">Start New Card</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-offset-2 col-sm-8 center">
				<form action="">
					<input type="text" placeholder="Search Cards" />
				</form>
			</div>
		</div>
		<a data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Colin Kapernick</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
						<tr><td class="date"><strong>9/20</strong></td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Good Child(f)</td></tr>
					</tbody>
				</table>
			</div>
		</a>
		<a data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Jospesh Smoshefverylongname</span></div>
			</header>
			<div class="content">
				<table class="noborder compact">
					<tbody>
					<tr><td class="date"><strong>9/20</strong></td></tr>
					<tr><td>Good Child(f)</td></tr>
					<tr><td>Good Child(f)</td></tr>
					<tr><td>Good Child(f)</td></tr>
					</tbody>
				</table>
			</div>
		</a>
	</main>

	<?php include('footer.html');?>

</body>
</html>
