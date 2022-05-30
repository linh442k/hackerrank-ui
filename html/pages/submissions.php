<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/submissions.css">

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

	<title>Submissions</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="submissions-page-title-wrapper" style="display: block;">
			<div class="submissions-page-title">
				<div>
					<div class="submissions-page-title-content">
						All Submissions
					</div>
				</div>
			</div>
		</div>
		<div class="submissions-page-content" style="min-height: 800px;">
			<div>
				<section class="submissions-container">
					<header>
						<div class="submissions-container-title">
							<div>
								<h1>
									Submissions
								</h1>
								<div class="submissions-sort-filters">
									<a href="/" class="submissions-filter-btn-active"><span class="submissions-icon-text">Sort by Date</span></a>
									<a href="/" class="submissions-filter-btn"><span class="submissions-icon-text">Sort by Challenge</span></a>
								</div>
							</div>
						</div>
					</header>
					<div style="text-align: center !important;">
						<div class="submissions-table-wrapper">
							<div class="submissions-table-header">
								<div class="submissions-table-header-problem">
									<p>Problem</p>
								</div>
								<div class="submissions-table-header-language">
									<p>Language</p>
								</div>
								<div class="submissions-table-header-time">
									<p>Time</p>
								</div>
								<div class="submissions-table-header-result">
									<p>Result</p>
								</div>
								<div class="submissions-table-header-score">
									<p>Score</p>
								</div>
								<div class="submissions-table-header-blank">
									<p></p>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="submissions-table-header-problem">
											<p><a class="submissions-table-header-problem-item" href="/">Handshake</a></p>
										</div>
										<div class="submissions-table-header-language">
											<p>Java 7</p>
										</div>
										<div class="submissions-table-header-time">
											<p>about 1 hour ago</p>
										</div>
										<div class="submissions-table-header-result submissions-table-header-result-wrong-answer">
											<p>Wrong Answer <i class="fa fa-times" aria-hidden="true"></i> </p>
										</div>
										<div class="submissions-table-header-score">
											<p>9.0</p>
										</div>
										<div class="submissions-table-header-button">
											<p>
												<a href="/" class="submissions-table-header-button-view">View Results</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="submissions-table-header-problem">
											<p><a class="submissions-table-header-problem-item" href="/">Handshake</a></p>
										</div>
										<div class="submissions-table-header-language">
											<p>Java 7</p>
										</div>
										<div class="submissions-table-header-time">
											<p>about 1 hour ago</p>
										</div>
										<div class="submissions-table-header-result submissions-table-header-result-accepted">
											<p>Accepted <i class="fa fa-check" aria-hidden="true"></i> </p>
										</div>
										<div class="submissions-table-header-score">
											<p>9.0</p>
										</div>
										<div class="submissions-table-header-button">
											<p>
												<a href="/" class="submissions-table-header-button-view">View Results</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="submissions-table-header-problem">
											<p><a class="submissions-table-header-problem-item" href="/">Handshake</a></p>
										</div>
										<div class="submissions-table-header-language">
											<p>Java 7</p>
										</div>
										<div class="submissions-table-header-time">
											<p>about 1 hour ago</p>
										</div>
										<div class="submissions-table-header-result submissions-table-header-result-compilation-error">
											<p>Compilation error </p>
										</div>
										<div class="submissions-table-header-score">
											<p>9.0</p>
										</div>
										<div class="submissions-table-header-button">
											<p>
												<a href="/" class="submissions-table-header-button-view">View Results</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div style="padding-top: 20px; border-top: 1px solid #c2c7d0 !important;"></div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php require_once "../components/footer.php" ?>
	</div>
	<script src="../../js/submissions.js"></script>
</body>

</html>