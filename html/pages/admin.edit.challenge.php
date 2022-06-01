<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/admin.edit.css">

	<link rel="stylesheet" href="../../css/admin.edit.challenge.css">

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

	<title>Edit Challenge</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="admin-edit-page-title-wrapper" style="display: block;">
			<div class="admin-edit-page-title">
				<div>
					<div class="admin-edit-page-title-content">
						<span><a href="/">Manage Challenges</a></span>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="current-page"><a>Challenge Name</a></span>
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
								<div>Challenge Name</div>
							</h1>
						</div>
						<div class="admin-edit-tabs">
							<ul>
								<li class="admin-edit-tabs-item-active">
									<a href="/">Details</a>
								</li>
								<li>
									<a href="/">Moderator</a>
								</li>
								<li>
									<a>Test Cases</a>
								</li>
								<li>
									<a href="/">ABC</a>
								</li>
							</ul>
						</div>
					</header>
					<div class="admin-create-challenge-page-body">
						<div class="admin-create-challenge-page-inner-body" style="position: relative;">
							<p>This is the basic information that describes your challenge.</p>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-name" class="admin-create-challenge-page-form-element-challenge-label">Challenge Name</label>
								<div class="admin-create-challenge-page-form-element-challenge-name-input">
									<input id="admin-edit-challenge-name" type="text">
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element public-checkbox">
								<label for="admin-edit-challenge-public" class="admin-create-challenge-page-form-element-challenge-label">Public Challenge</label>
								<div class="admin-create-challenge-page-form-element-challenge-label-input">
									<input type="checkbox" value="solved" id="admin-edit-public-challenge">
									<span class="custom-checkbox"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor">
											<path d="M9 18c-.3 0-.5-.1-.7-.3l-5-5c-.4-.4-.4-1 0-1.4s1-.4 1.4 0L9 15.6 19.3 5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z"></path>
										</svg></span>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-description" class="admin-create-challenge-page-form-element-challenge-label">Description</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<textarea rows="2" id="admin-edit-challenge-description" class="admin-edit-challenge-description-input" placeholder="Write a short summary about the challenge" spellcheck="false"></textarea>
									<small class="description-input-help-hint">Characters left: 140</small>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-statement" class="admin-create-challenge-page-form-element-challenge-label">Problem Statement</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
									<small class="statement-input-help-hint"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="statement-input-help-hint-left">1000</span></small>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-input" class="admin-create-challenge-page-form-element-challenge-label">Input Format
								</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-constraints" class="admin-create-challenge-page-form-element-challenge-label">Constraints</label>
								<div class="admin-create-challenge-page-form-element-challenge-description-input">
									<div>framework editor</div>
									<textarea rows="4" spellcheck="false"></textarea>
								</div>
							</div>
							<div class="admin-create-challenge-page-inner-body-form-element">
								<label for="admin-edit-challenge-output" class="admin-create-challenge-page-form-element-challenge-label">Output Format
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
							<button class="admin-edit-challenge-save-button">Save Changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="../../js/admin.edit.challenge.js"></script>
</body>

</html>