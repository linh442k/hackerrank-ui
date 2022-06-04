<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/admin.create.challenge.css">

	<link rel="stylesheet" href="../../css/admin.create.contest.css">

	<link rel="stylesheet" href="../../css/admin.edit.css">

	<link rel="stylesheet" href="../../css/admin.edit.testcase.css">

	<link rel="stylesheet" href="../../css/admin.edit.challenge.css">

	<link rel="stylesheet" href="../../css/admin.edit.contest.css">

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

	<title>Edit Challenge TestCases</title>
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
								<li>
									<a href="/">Details</a>
								</li>
								<li>
									<a href="/">Moderator</a>
								</li>
								<li class="admin-edit-tabs-item-active">
									<a>Test Cases</a>
								</li>
								<li>
									<a href="/">ABC</a>
								</li>
							</ul>
						</div>
					</header>
					<div class="admin-edit-testcase-container">
						<p class="admin-edit-testcase-text-helper">
							Add test cases to judge the correctness of a user’s code. Refer to these
							<a target="_blank" href="/">instructions</a>
							to write a good test case.
						</p>
						<div class="admin-edit-testcase-upload-button-wrapper">
							<div class="admin-edit-testcase-upload-button">
								<button>+ Add Test Case</button>
							</div>
						</div>
						<div class="admin-edit-testcase-upload-table-wrapper">
							<header class="admin-edit-testcase-upload-table-header">
								<div class="admin-edit-testcase-upload-table-order-column">
									<p>Order</p>
								</div>
								<div class="admin-edit-testcase-upload-table-input-column">
									<p>Input</p>
								</div>
								<div class="admin-edit-testcase-upload-table-output-column">
									<p>Output</p>
								</div>
								<div class="admin-edit-testcase-upload-table-sample-column">
									<p>Sample</p>
								</div>
								<div class="admin-edit-testcase-upload-table-point-column">
									<p style="padding-right: 15px">Score</p>
								</div>
								<div class="admin-edit-testcase-upload-table-crud-column" style="width: 8%" ;>
									<p>Action</p>
								</div>
							</header>
							<div class="admin-edit-testcase-upload-table-body">
								<div class="admin-edit-testcase-upload-table-body-item">
									<div class="admin-edit-testcase-upload-table-order-column">
										<p>0</p>
									</div>
									<div class="admin-edit-testcase-upload-table-input-column">
										<p>sample</p>
									</div>
									<div class="admin-edit-testcase-upload-table-output-column">
										<p>sample</p>
									</div>
									<div class="admin-edit-testcase-upload-table-sample-column">
										<p class="sample-test"><i class="fa fa-check" aria-hidden="true"></i></p>
									</div>
									<div class="admin-edit-testcase-upload-table-point-column">
										<p class="admin-edit-testcase-upload-table-point-column-content">10.00</p>
									</div>
									<div class="admin-edit-testcase-upload-table-crud-column">
										<p>
											<span class="admin-edit-testcase-upload-table-update"><i class="fa fa-pencil" aria-hidden="true"></i></span>
											<span class="admin-edit-testcase-upload-table-delete"><i class="fa fa-trash" aria-hidden="true"></i></span>
										</p>
									</div>
								</div>
								<div class="admin-edit-testcase-upload-table-body-item">
									<div class="admin-edit-testcase-upload-table-order-column">
										<p>1</p>
									</div>
									<div class="admin-edit-testcase-upload-table-input-column">
										<p>sample</p>
										<p>accasdassssssssssss</p>
										<p>accasdasssssssssssssssssssssasdasdasdassssssss</p>
										<p>sample</p>
										<p>accasdasssssssssssssssssssssasdasdasdassssssss</p>
										<p>accasdasssssssssssssssssssssasdasdasdassssssss</p>
									</div>
									<div class="admin-edit-testcase-upload-table-output-column">
										<p>sample</p>
										<p>accasdasssssssssssssssssssssasdasdasdassssssss</p>
									</div>
									<div class="admin-edit-testcase-upload-table-sample-column">
										<p class="not-sample-test"><i class="fa fa-times" aria-hidden="true"></i></p>
									</div>
									<div class="admin-edit-testcase-upload-table-point-column">
										<p class="admin-edit-testcase-upload-table-point-column-content">10.00</p>
									</div>
									<div class="admin-edit-testcase-upload-table-crud-column">
										<p>
											<span class="admin-edit-testcase-upload-table-update"><i class="fa fa-pencil" aria-hidden="true"></i></span>
											<span class="admin-edit-testcase-upload-table-delete"><i class="fa fa-trash" aria-hidden="true"></i></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php require_once "../components/footer.php" ?>
		<div id="admin-edit-testcase-modal" class="admin-edit-testcase-modal">
			<div class="admin-edit-testcase-modal-content">
				<div class="admin-edit-testcase-modal-header">
					<p>Add Test Case</p>
					<span class="admin-edit-testcase-modal-close">&times;</span>
				</div>
				<div class="admin-edit-testcase-modal-info">
					<div class="admin-edit-testcase-choose-challenge">
						<label for="admin-edit-testcase-input">Input</label>
						<div>
							<textarea rows="2" spellcheck="false" id="admin-edit-testcase-input"></textarea>
						</div>
					</div>
					<div class="admin-edit-testcase-choose-challenge">
						<label for="admin-edit-testcase-output">Output</label>
						<div>
							<textarea rows="2" spellcheck="false" id="admin-edit-testcase-output"></textarea>
						</div>
					</div>
					<div class="admin-edit-testcase-choose-challenge">
						<label for="admin-edit-testcase-score">Score</label>
						<div>
							<input id="admin-edit-testcase-score" type="number" min=0>
						</div>
					</div>
					<div class="admin-edit-testcase-choose-challenge flex-container">
						<label for="admin-edit-testcase-sample">Sample</label>
						<div class="admin-create-challenge-page-form-element-challenge-label-input" id="admin-edit-testcase-sample-container">
							<input type="checkbox" value="solved" id="admin-edit-testcase-sample">
							<span class="custom-checkbox"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor">
									<path d="M9 18c-.3 0-.5-.1-.7-.3l-5-5c-.4-.4-.4-1 0-1.4s1-.4 1.4 0L9 15.6 19.3 5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z"></path>
								</svg></span>
						</div>
					</div>
					<div class="admin-edit-testcase-choose-challenge" id="admin-edit-testcase-explanation-container" style="display: none;">
						<label for="admin-edit-testcase-explanation">Explanation</label>
						<div>
						<textarea rows="4" spellcheck="false" id="admin-edit-testcase-explanation" placeholder="framework editor"></textarea>
						</div>
					</div>
					<div class="admin-edit-testcase-btn">
						<button id="admin-edit-testcase-add-btn">Add Test Case</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="../../js/admin.edit.testcase.js"></script>
</body>

</html>