<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/submissions.css">

	<link rel="stylesheet" href="../../css/contest.records.css">

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

	<title>Contest Records</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="submissions-page-title-wrapper" style="display: block;">
			<div class="submissions-page-title">
				<div>
					<div class="submissions-page-title-content">
						All Contest Record
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
									Contest Records
								</h1>
								<div class="submissions-sort-filters">
									<a href="/" class="submissions-filter-btn-active"><span class="submissions-icon-text">Sort by Default</span></a>
									<a href="/" class="submissions-filter-btn"><span class="submissions-icon-text">Sort by Score</span></a>
								</div>
							</div>
						</div>
					</header>
					<div style="text-align: center !important;">
						<div class="submissions-table-wrapper">
							<div class="submissions-table-header">
								<div class="contest-records-table-header-contest">
									<p>Contest</p>
								</div>
								<div class="contest-records-table-header-start-time">
									<p>Start Time</p>
								</div>
								<div class="contest-records-table-header-end-time">
									<p>Submit Time</p>
								</div>
								<div class="contest-records-table-header-final-score">
									<p>Final Score</p>
								</div>
								<div class="contest-records-table-header-blank">
									<p></p>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="contest-records-table-header-contest">
											<p><a class="contest-records-table-header-problem-item" href="/">National Disability Independence Day 2021 Coding Contest</a></p>
										</div>
										<div class="contest-records-table-header-start-time">
											<p>6/16/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-end-time">
											<p>6/18/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-final-score">
											<p>9.00</p>
										</div>
										<div class="contest-records-table-header-button">
											<p>
												<a href="/" class="contest-records-table-header-button-view">View Submissions</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="contest-records-table-header-contest">
											<p><a class="contest-records-table-header-problem-item" href="/">International Women's Day Coding Contest 2021</a></p>
										</div>
										<div class="contest-records-table-header-start-time">
											<p>6/16/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-end-time">
											<p>6/18/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-final-score">
											<p>9.00</p>
										</div>
										<div class="contest-records-table-header-button">
											<p>
												<a href="/" class="contest-records-table-header-button-view">View Submissions</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="submissions-table-body">
								<div class="submission-table-item-wrapper">
									<div class="submission-table-item">
										<div class="contest-records-table-header-contest">
											<p><a class="contest-records-table-header-problem-item" href="/">International Women's Day Coding Contest 2021</a></p>
										</div>
										<div class="contest-records-table-header-start-time">
											<p>6/16/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-end-time">
											<p>6/18/2021 - 1:30PM</p>
										</div>
										<div class="contest-records-table-header-final-score">
											<p>9.00</p>
										</div>
										<div class="contest-records-table-header-button">
											<p>
												<a href="/" class="contest-records-table-header-button-view">View Submissions</a>
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
	<script src="../../js/contest.records.js"></script>
</body>

</html>