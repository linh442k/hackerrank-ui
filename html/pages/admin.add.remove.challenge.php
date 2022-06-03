<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/admin.edit.css">

	<link rel="stylesheet" href="../../css/admin.edit.challenge.css">

	<link rel="stylesheet" href="../../css/admin.edit.contest.css">

	<link rel="stylesheet" href="../../css/admin.edit.testcase.css">

	<link rel="stylesheet" href="../../css/admin.create.challenge.css">

	<link rel="stylesheet" href="../../css/admin.create.contest.css">

	<link rel="stylesheet" href="../../css/admin.add.remove.challenge.css">

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

	<title>Add/Remove Challenges</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="admin-edit-page-title-wrapper" style="display: block;">
			<div class="admin-edit-page-title">
				<div>
					<div class="admin-edit-page-title-content">
						<span><a href="/">Manage Contests</a></span>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="current-page"><a>Edit Contest</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="admin-edit-page-content" style="min-height: 800px;">
			<div>
				<section class="admin-edit-container">
					<header>
						<div class="admin-edit-challenge-name">
							<h1>
								<div>Contest Name</div>
							</h1>
						</div>
						<div class="admin-edit-tabs">
							<ul>
								<li>
									<a href="/">Details</a>
								</li>
								<li>
									<a href="/">Moderator</a>
								</li>
								<li class="admin-edit-tabs-item-active">
									<a>Add/Remove Challenges</a>
								</li>
								<li>
									<a href="/">ABC</a>
								</li>
							</ul>
						</div>
					</header>
					<div class="admin-create-challenge-page-inner-body" style="position: relative;">
						<p class="admin-edit-testcase-text-helper">
							Add challenges to your contest by selecting challenges from the challenge list or create and add your own challenges
							<a target="_blank" href="/">here</a>.
						</p>
						<div class="admin-edit-testcase-upload-button-wrapper">
							<div class="admin-edit-testcase-upload-button">
								<button id="admin-add-challenge-button">+ Add Challenge</button>
							</div>
						</div>
						<div class="admin-edit-testcase-upload-table-wrapper">
							<header class="admin-edit-testcase-upload-table-header">
								<div class="admin-edit-testcase-upload-table-order-column">
									<p>Order</p>
								</div>
								<div class="admin-edit-testcase-upload-table-challenge-column">
									<p>Challenge Name</p>
								</div>
								<div class="admin-edit-testcase-upload-table-max-score-column">
									<p>Max Score</p>
								</div>
								<div class="admin-edit-testcase-upload-table-public-column">
									<p>Public Challenge</p>
								</div>
								<div class="admin-edit-testcase-upload-table-crud-column">
									<p>Action</p>
								</div>
							</header>
							<div class="admin-edit-testcase-upload-table-body">
								<div class="admin-edit-testcase-upload-table-body-item">
									<div class="admin-edit-testcase-upload-table-order-column">
										<p>1</p>
									</div>
									<div class="admin-edit-testcase-upload-table-challenge-column">
										<p><a>National Disability Independence Day 2021 Coding Contest</a></p>
									</div>
									<div class="admin-edit-testcase-upload-table-max-score-column">
										<p class="admin-edit-testcase-upload-table-point-column-content">10.00</p>
									</div>
									<div class="admin-edit-testcase-upload-table-public-column">
										<p class="sample-test"><i class="fa fa-check" aria-hidden="true"></i></p>
									</div>
									<div class="admin-edit-testcase-upload-table-crud-column">
										<p>
											<span class="admin-edit-contest-delete-challenge"><i class="fa fa-trash" aria-hidden="true"></i></span>
										</p>
									</div>
								</div>
								<div class="admin-edit-testcase-upload-table-body-item">
									<div class="admin-edit-testcase-upload-table-order-column">
										<p>2</p>
									</div>
									<div class="admin-edit-testcase-upload-table-challenge-column">
										<p><a>National Disability Independence Day 2021 Coding Contest</a></p>
									</div>
									<div class="admin-edit-testcase-upload-table-max-score-column">
										<p class="admin-edit-testcase-upload-table-point-column-content">10.00</p>
									</div>
									<div class="admin-edit-testcase-upload-table-public-column">
										<p class="not-sample-test"><i class="fa fa-times" aria-hidden="true"></i></p>
									</div>
									<div class="admin-edit-testcase-upload-table-crud-column">
										<p>
											<span class="admin-edit-contest-delete-challenge"><i class="fa fa-trash" aria-hidden="true"></i></span>
										</p>
									</div>

								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
		<?php require_once "../components/footer.php" ?>


		<div id="admin-add-challenge-modal" class="admin-add-challenge-modal">
			<div class="admin-add-challenge-modal-content">
				<div class="admin-add-challenge-modal-header">
					<p>Add Challenge</p>
					<span class="admin-add-challenge-modal-close">&times;</span>
				</div>
				<div class="admin-add-challenge-modal-info">
					<!-- <i class="fa fa-question-circle fa-3x" aria-hidden="true" style="color:grey;"></i> -->
					<p>You can add a challenge from the challenge list!</p>
					<!-- <div id="model-info-text">Test Model Info</div> -->
					<div class="admin-add-challenge-choose-challenge">
						<label for="admin-add-challenge-name">Name</label>
						<div>
							<select id="admin-add-challenge-name">
								<option value="" disabled selected>Select from challenge list</option>
								<option value="volvo">Challenge Name - Challenge Id</option>
								<option value="saab">Saab</option>
								<option value="fiat">Fiat</option>
								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<div class="admin-add-challenge-btn">
						<button>Add Challenge</button>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	<script src="../../js/admin.add.remove.challenge.js"></script>
</body>

</html>