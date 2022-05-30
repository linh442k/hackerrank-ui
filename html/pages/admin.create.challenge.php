<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<title>Create Challenge</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="admin-create-challenge-page-title-wrapper" style="display: block;">
			<div class="admin-create-challenge-page-title">
				<div>
					<div class="admin-create-challenge-page-title-content">
						Create Challenge
					</div>
				</div>
			</div>
		</div>
		<div class="admin-create-challenge-page-content" style="min-height: 800px;">
			<div>
				<section class="admin-create-challenge-container">
					<div class="admin-create-challenge-page-header" style="width: 100%;">
						<h1>Create Challenge</h1>
					</div>
					<div style="padding-bottom: 5px; background-color: #ffffff;"></div>
					<div class="admin-create-challenge-page-body">
						<div class="admin-create-challenge-page-inner-body" style="position: relative;">
							<p>Get started by providing the initial details needed to create a challenge.</p>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-name" class="admin-create-challenge-page-form-element-challenge-label">Challenge Name</label>
								<div class="admin-create-challenge-page-form-element-challenge-name-input">
									<input id="admin-create-challenge-name" type="text">
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-description" class="admin-create-challenge-page-form-element-challenge-label">Description</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<textarea rows="2" id="admin-create-challenge-description" class="admin-create-challenge-description-input" placeholder="Write a short summary about the challenge" spellcheck="false"></textarea>
									<small class="description-input-help-hint">Characters left: 140</small>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-statement" class="admin-create-challenge-page-form-element-challenge-label">Problem Statement</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
									<small class="statement-input-help-hint"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="statement-input-help-hint-left">1000</span></small>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-input" class="admin-create-challenge-page-form-element-challenge-label">Input Format
								</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-constraints" class="admin-create-challenge-page-form-element-challenge-label">Constraints</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-create-challenge-output" class="admin-create-challenge-page-form-element-challenge-label">Output Format
								</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="admin-create-challenge-sticky-bottom">
					<div class="admin-create-challenge-sticky-bottom-bar">
						<div class="admin-create-challenge-sticky-bottom-button">
							<button class="admin-create-challenge-save-button">Save Changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../js/admin.create.challenge.js"></script>
</body>

</html>