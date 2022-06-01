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
								<li>
									<a href="/">Manage Contests</a>
								</li>
								<li class="active">
									<a>Manage Challenges</a>
								</li>
								<div>
									<form>
										<input type="text" placeholder="search" id="admin-search-text" autocomplete="off">
										<i class="fa fa-search" aria-hidden="true"></i>
									</form>
								</div>
							</ul>
						</header>
						<div class="admin-list-page-content-create-button-wrapper">
							<div class="admin-list-page-content-create-button-text-helper">
								<p>Challenges you can edit are below.</p>
							</div>
							<button class="admin-list-page-content-create-button" href="/">Create Challenge
							</button>
						</div>
						<div class="admin-list-page-content-table-wrapper">
							<header>
								<div class="admin-challenge-list-page-content-challenge-name">
									<p>Challenge Name</p>
								</div>
								<div class="admin-challenge-list-page-content-max-score">
									<p>Max Score</p>
								</div>
								<div class="admin-challenge-list-page-content-public">
									<p>Public Challenge</p>
								</div>
							</header>
							<div class="admin-list-page-content-table-body">
								<a class="admin-challenge-page-content-table-item">
									<div class="admin-challenge-page-content-table-item-container">
										<div class="admin-challenge-list-page-content-challenge-name">
											<p>Challenge Name</p>
										</div>
										<div class="admin-challenge-list-page-content-max-score">
											<p class="admin-challenge-list-page-content-challenge-max-score">90.50</p>
										</div>
										<div class="admin-challenge-list-page-content-public">
											<p class="admin-challenge-list-public-challenge">Yes</p>
										</div>
									</div>
								</a>
								<a class="admin-challenge-page-content-table-item">
									<div class="admin-challenge-page-content-table-item-container">
										<div class="admin-challenge-list-page-content-challenge-name">
											<p>Challenge Name</p>
										</div>
										<div class="admin-challenge-list-page-content-max-score">
											<p class="admin-challenge-list-page-content-challenge-max-score">70.20</p>
										</div>
										<div class="admin-challenge-list-page-content-public">
											<p class="admin-challenge-list-hidden-challenge">No</p>
										</div>
									</div>
								</a>
							</div>
						</div>
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