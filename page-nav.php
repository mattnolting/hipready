<div id="st-container" class="st-container">
	<nav class="st-menu st-effect-1" id="menu-1">
		<i id="close" class="fa fa-bars toggle" data-effect="st-effect-1"></i>
		<a href="index.php"><i class="fa fa-home"></i></a>
		<ul>
			<li><a href="9-stable-home.php">My Stable</a></li>
			<li><a href="4-add-user.php">Add / Edit User</a></li>
			<li><a href="10-current-sale.php">Change Sales</a></li>
			<li><a href="23-looker.php">View Lookers</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Change Password</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="7-about-hipready.php">About HipReady</a></li>
			<li><a href="#">Change Password</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</nav>

	<div class="st-pusher">
		<div class="st-content"><!-- this is the wrapper for the content -->
			<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->

<header class="banner masthead center" role="banner">
	<div class="title"><?php echo $page_title; ?></div>
	<?php echo $page_sub_title ? '<div class="sub-title"><span>' . $page_sub_title . '</span></div>' : null; ?>
	<?php echo $show_logo ? null : '<a href="index.php" class="logo"></a>'; ?>
	<nav role="navigation" id="nav" class="column">
		<i class="fa fa-bars toggle" data-effect="st-effect-1"></i>
	</nav>
</header>
