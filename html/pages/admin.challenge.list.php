<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/admin.list.css">

	<link rel="stylesheet" href="../../css/admin.challenge.list.css">

	<link rel="stylesheet" href="../../css/style.css">

	<link rel="stylesheet" href="../../css/header.css">

	<link rel="stylesheet" href="../../css/footer.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<title>Manage Challenges</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="admin-page-content-wrapper">
			<div class="admin-list-page-container">
				<div class="admin-list-page-inner-container">
					<section class="admin-list-page-content" style="display: block;">
						<header>
							<div class="admin-list-page-title">
								<h1>Administration</h1>
							</div>
							<ul class="admin-list-page-header-navigation">
								<li class="active">
									<a href="/" >Manage Contests</a>
								</li>
								<li>
									<a href="/" >Manage Challenges</a>
								</li>
								<div>
									<form>
										<input type="text" placeholder="search" id="admin-search-text"  autocomplete="off">
										<i class="fa fa-search" aria-hidden="true"></i>
									</form>
								</div>
							</ul>
						</header>
					</section>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="../../js/admin.list.js"></script>
	<script src="../../js/admin.challenge.list.js"></script>
</body>

</html>