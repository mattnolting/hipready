<?php include('head.html'); ?>

<?php $page_title = 'Your Cards'; ?>

<div class="modal fade list" id="add-horse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
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
					<button id="add-horse" class="btn btn-white">+ Add Horse</button>
				</header>
				<div class="content">
					<table id="horses" class="selectable">
						<thead>
						<tr>
							<th class="date">9/20</th>
							<th class="year invisible">Year</th>
							<th class="name invisible">Name</th>
							<th class="seen invisible">Seen</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="editable">200</td>
							<td class="editable">14</td>
							<td class="editable">Good Child(f)</td>
							<td><button class="btn btn-blue">To See</button><button class="btn btn-green active">Choose</button></td>
						</tr>
						<tr>
							<td class="editable">205</td>
							<td class="editable">14</td>
							<td class="editable">Fall Focus(f)</td>
							<td><button class="btn btn-blue">To See</button><button class="btn btn-green active">Choose</button></td>
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
							<td class="editable">400</td>
							<td class="editable">14</td>
							<td class="editable">Crocdundeal (f)</td>
							<td><button class="btn btn-blue">To See</button><button class="btn btn-green active">Choose</button></td>
						</tr>
						<tr>
							<td class="editable">405</td>
							<td class="editable">14</td>
							<td class="editable">Minor Miner (f)</td>
							<td><button class="btn btn-blue">To See</button><button class="btn btn-green active">Choose</button></td>
						</tr>
						</tbody>
					</table>
					<div class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, architecto, aspernatur at cupiditate fugit hic iste laborum nemo nihil numquam odit quae quas quidem ratione recusandae rem vel vero voluptatibus!<br />
						<a class="remove-note">- Remove Note</a>
					</div>

				</div>

				<footer class="center">
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-dark-blue" id="add-note">+ Add Note</button>
						</div>
					</div>
					<div class="row card-action">
						<div class="col-xs-12">
							<div class="btn btn-blue submit caps" data-toggle="modal" data-target="#add-horse">Submit to Open Cards</div>
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
		<button data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Colin Kapernick</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
						<tr><td class="date"><strong>9/20</strong></td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Ultimate Risk(c)</td></tr>
						<tr><td>Kar Kalim(f)</td></tr>
					</tbody>
				</table>
				<table class="noborder">
					<tbody>
						<tr><td class="date"><strong>9/21</strong></td></tr>
						<tr><td>Indian Paintbrush(f)</td></tr>
						<tr><td>Fall Focus(c)</td></tr>
						<tr><td>Crocdundeal(f)</td></tr>
					</tbody>
				</table>
			</div>
			<footer class="center">
				<div class="row card-action">
					<div class="col-xs-12">
						<div class="btn btn-white caps">Submitted 12:55</div>
					</div>
				</div>
			</footer>
		</button>
		<button data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Bill Blatsky</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/20</strong></td></tr>
					<tr><td>In The Moonlight(f)</td></tr>
					<tr><td>Napoleon(c)</td></tr>
					<tr><td>Fancy Mover(f)</td></tr>
					</tbody>
				</table>
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/21</strong></td></tr>
					<tr><td>Feature Presentation(f)</td></tr>
					<tr><td>Lady Blackstar(c)</td></tr>
					<tr><td>Wanna Red Checker(f)</td></tr>
					</tbody>
				</table>
			</div>
			<footer class="center">
				<div class="row card-action">
					<div class="col-xs-12">
						<div class="btn btn-white caps">Submitted 12:34</div>
					</div>
				</div>
			</footer>
		</button>
		<button data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Joseph Norris</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
						<tr><td class="date"><strong>9/20</strong></td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Jet Stream(c)</td></tr>
					</tbody>
				</table>
				<table class="noborder">
					<tbody>
						<tr><td class="date"><strong>9/21</strong></td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Good Child(f)</td></tr>
						<tr><td>Fall Focus(c)</td></tr>
						<tr><td>Crocdundeal(f)</td></tr>
					</tbody>
				</table>
			</div>
			<footer class="center">
				<div class="row card-action">
					<div class="col-xs-12">
						<div class="btn btn-white caps">Submitted 11:34</div>
					</div>
				</div>
			</footer>
		</button>
		<button data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Dave Milton</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/20</strong></td></tr>
					<tr><td>Good Child(f)</td></tr>
					<tr><td>Van Gogh(c)</td></tr>
					<tr><td>Jack Frost(f)</td></tr>
					</tbody>
				</table>
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/21</strong></td></tr>
					<tr><td>Good Child(f)</td></tr>
					<tr><td>Fall Focus(c)</td></tr>
					<tr><td>Crocdundeal(f)</td></tr>
					</tbody>
				</table>
			</div>
			<footer class="center">
				<div class="row card-action">
					<div class="col-xs-12">
						<div class="btn btn-white caps">Submitted 10:34</div>
					</div>
				</div>
			</footer>
		</button>
		<button data-toggle="modal" data-target="#add-horse" class="card">
			<header class="header">
				<div class="title"><span>Tim Greenberg</span></div>
			</header>
			<div class="content">
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/20</strong></td></tr>
					<tr><td>Made Of Honor(f)</td></tr>
					<tr><td>Van Gogh(c)</td></tr>
					<tr><td>Jack Frost(f)</td></tr>
					</tbody>
				</table>
				<table class="noborder">
					<tbody>
					<tr><td class="date"><strong>9/21</strong></td></tr>
					<tr><td>Abbacus(f)</td></tr>
					<tr><td>Bronco(c)</td></tr>
					<tr><td>Ace(f)</td></tr>
					</tbody>
				</table>
			</div>
			<footer class="center">
				<div class="row card-action">
					<div class="col-xs-12">
						<div class="btn btn-white caps">Submitted 9:34</div>
					</div>
				</div>
			</footer>
		</button>
	</main>

	<?php include('footer.html');?>

</body>
</html>
