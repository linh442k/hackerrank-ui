<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/admin.create.contest.css">

	<link rel="stylesheet" href="../../css/admin.create.challenge.css">

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

	<title>Create Contest</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="admin-create-contest-page-title-wrapper" style="display: block;">
			<div class="admin-create-contest-page-title">
				<div>
					<div class="admin-create-contest-page-title-content">
						<span><a href="/">Manage Contests</a></span>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="current-page"><a>Create</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="admin-create-contest-page-content" style="min-height: 800px;">
			<div>
				<section class="admin-create-contest-container">
					<div class="admin-create-challenge-page-header" style="width: 100%;">
						<h1>Create Contest</h1>
					</div>
					<div style="padding-bottom: 5px; background-color: #ffffff;"></div>
					<div class="admin-create-challenge-page-inner-body" style="position: relative;">
						<p>Get started by providing the initial details needed to create a contests.</p>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-name" class="admin-create-challenge-page-form-element-challenge-label">Contest Name</label>
							<div class="admin-create-challenge-page-form-element-challenge-name-input">
								<input id="admin-create-contest-name" type="text">
							</div>
						</div>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-description" class="admin-create-challenge-page-form-element-challenge-label">Description</label>
							<div class="admin-create-challenge-page-form-element-challenge-description-input">
								<textarea rows="2" id="admin-create-contest-description" class="admin-create-challenge-description-input" placeholder="Write a short summary about the contest" spellcheck="false"></textarea>
								<small class="description-input-help-hint">Characters left: 140</small>
							</div>
						</div>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-statement" class="admin-create-challenge-page-form-element-challenge-label">Contest Detail Statement</label>
							<div class="admin-create-challenge-page-form-element-challenge-description-input">
								<div>framework editor</div>
								<textarea rows="8" spellcheck="false"></textarea>
								<small class="statement-input-help-hint"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="statement-input-help-hint-left">1000</span></small>
							</div>
						</div>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-start-time" class="admin-create-challenge-page-form-element-challenge-label">Start Time</label>
							<div class="admin-create-challenge-page-form-element-challenge-name-input">
								<input id="admin-create-contest-start-time-date" type="date">&nbsp; at &nbsp; <input id="admin-create-contest-start-time-hour" type="time">
							</div>
						</div>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-end-time" class="admin-create-challenge-page-form-element-challenge-label">End Time</label>
							<div class="admin-create-challenge-page-form-element-challenge-name-input">
								<input id="admin-create-contest-end-time-date" type="date">&nbsp; at &nbsp; <input id="admin-create-contest-end-time-hour" type="time">
							</div>
						</div>
						<div class="admin-create-challenge-page-inner-body-form-element">
							<label for="admin-create-contest-duration" class="admin-create-challenge-page-form-element-challenge-label">Duration</label>
							<div class="admin-create-challenge-page-form-element-challenge-name-input">
								<input id="admin-create-contest-duration" type="number" min=1> minutes
							</div>
						</div>
					</div>
				</section>
				<div class="admin-create-challenge-sticky-bottom">
					<div class="admin-create-challenge-sticky-bottom-bar">
						<div class="admin-create-challenge-sticky-bottom-button">
							<button class="admin-create-challenge-save-button" id="admin-create-contest-save-button">Save Changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../js/admin.create.contest.js"></script>
</body>

</html>