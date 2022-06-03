<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/detail.css">

	<link rel="stylesheet" href="../../css/submission.detail.css">

	<link rel="stylesheet" href="../../css/challenge.detail.css">

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

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">

	<title>Submission Details</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="challenge-detail-page-title-wrapper" style="display: block;">
			<div class="challenge-detail-page-title">
				<div>
					<div class="challenge-detail-page-title-content">
						<h1>Compare the Triplets</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="challenge-detail-page-content" style="min-height: 800px;">
			<div class="challenge-detail-page-content-header">
				<div class="challenge-detail-page-content-header-wrapper">
					<div class="challenge-detail-page-content-header-list">
						<div class="challenge-detail-page-content-header-tab">
							<a class="challenge-detail-page-content-header-item" href="/">
								<div class="challenge-detail-page-content-header-item-detail">
									<span>Problem</span>
								</div>
							</a>
							<a class="challenge-detail-page-content-header-item content-header-active" href="/">
								<div class="challenge-detail-page-content-header-item-detail">
									<span>Submissions</span>
								</div>
							</a>
							<!-- <a class="challenge-detail-page-content-header-item" href="/">
								<div class="challenge-detail-page-content-header-item-detail">
									<span>Test</span>
								</div>
							</a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="submission-detail-page-content-container">
				<div class="submission-detail-page-content-left-panel">
				<div>
						<div>
							<section class="submission-detail-page-content-left-panel-container">
								<div class="submission-detail-left-panel-header">
									<div class="submission-detail-left-panel-header-submitted-at">You made this submission 12 minutes ago.</div>
									<div class="submission-detail-left-panel-header-submission-score"><label>Score:</label><span class="value">70.00</span></div>
									<div class="submission-detail-left-panel-header-status-wrap"><label>Status:</label><span class="error">Wrong Answer</span></div>
								</div>
								<div class="submission-detail-left-panel-header-editor-wrapper">
									<h3>Submitted Code</h3>
									<div class="submission-detail-left-panel-header-editor">
										<div>
											<div>
												<span>
													<strong>Language:</strong> PHP
												</span>
											</div>
										</div>
										<div class="submission-detail-left-panel-header-editor-code-editor">code editor</div>
									</div>
								</div>
							</section>

						</div>
					</div>
					<div class="submission-detail-test-case-status">
						<div class="submission-detail-test-case-status-wrapper">
							<div class="submission-detail-test-case-status-container">
								<div class="submission-detail-test-case-compile-error">
									<div class="submission-detail-test-case-compile-error-message">
										<p>Compile Message</p>
										<pre>
											<code><?php echo "Solution.cpp: In function ‘std::vector&lt;int&gt; compareTriplets(std::vector&lt;int&gt;, std::vector&lt;int&gt;)’:" . "<br>" . "Solution.cpp:19:12: error: could not convert ‘1’ from ‘int’ to ‘std::vector&lt;int&gt;’" . "<br>" . "     return 1;" . "<br>" . "            ^"; ?>
											</code>		
										</pre>
									</div>
									<div class="submission-detail-test-case-compile-error-status">
										<p>Exit Status</p>
										<pre>
											<code>1</code>		
										</pre>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="submission-detail-test-case-status">
						<div class="submission-detail-test-case-status-wrapper">
							<div class="submission-detail-test-case-result-container">
								<div>
									<div class="submission-detail-test-case-result">
										<div class="submission-detail-test-case-list-container">
											<div class="submission-detail-test-case-list">
												<button class="submission-detail-test-case submission-detail-test-case-active">
													<div class="submission-detail-test-case-btn-success">
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Passed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M12 23C5.9 23 1 18.1 1 12c0-3 1.1-5.7 3.2-7.8C6.3 2.1 9.1 1 12 1c1.6 0 3.1.3 4.5 1 .5.2.7.8.5 1.3-.2.5-.8.7-1.3.5-1.2-.5-2.4-.8-3.7-.8-5 0-9 4-9 9s4 9 9 9 9-4 9-9v-.9c0-.6.4-1 1-1s1 .4 1 1v.9c0 6.1-4.9 11-11 11z"></path>
															<path d="M12 15c-.3 0-.5-.1-.7-.3l-3-3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l2.3 2.3L22.3 2.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 0</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
														<svg viewBox="0 0 24 24" width="1em" height="1em" role="img" aria-label="Hidden test case" tabindex="0" data-automation="tab-item-lock-icon" class=" ui-svg-icon" fill="currentColor" aria-describedby="tooltip-1">
															<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
														</svg>
													</div>
												</button>
												<button class="submission-detail-test-case">
													<div class="submission-detail-test-case-btn-error">
														<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
															<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
															<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
														</svg>
														<span class="submission-detail-test-case-number">Test case 1</span>
													</div>
												</button>
											</div>
											<div class="submission-detail-test-case-info-wrapper">
												<!-- <div class="submission-detail-test-case-info-public">
													<div>
														<div class="submission-detail-test-case-info-compile-message">
															<div class="submission-detail-test-case-info-compile-message-header">
																Compiler Message
															</div>
															<div class="submission-detail-test-case-info-compile-message-body">
																Success
															</div>
														</div>
														<div class="submission-detail-test-case-info-input">
															<div class="submission-detail-test-case-info-input-header">
																Input (stdin)
															</div>
															<div class="submission-detail-test-case-info-input-body">
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
															</div>
														</div>
														<div class="submission-detail-test-case-info-output">
															<div class="submission-detail-test-case-info-output-header">
																Expected Output
															</div>
															<div class="submission-detail-test-case-info-output-body">
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeewerwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewerwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewerwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewerwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
																5 6 7wer werwerwer werwerewrwerweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
																<br>
																3 6 10
															</div>
														</div>
													</div>
												</div> -->
												<div class="submission-detail-test-case-info-hidden">
													<div class="submission-detail-test-case-info-compile-message">
														<div class="submission-detail-test-case-info-compile-message-header">
															Compiler Message
														</div>
														<div class="submission-detail-test-case-info-compile-message-body">
															Wrong Answer
														</div>
													</div>
													<div class="submission-detail-test-case-info-hidden-icon">
														<div>
															<svg viewBox="0 0 24 24" width="1em" height="1em" class=" ui-svg-icon" fill="currentColor">
																<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
															</svg>
															<span>Hidden Test Case</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<!-- 
					<section class="challenge-detail-page-content-left-panel-hidden-problem">
						<div>
							<svg viewBox="0 0 24 24" width="1em" height="1em" class=" ui-svg-icon" fill="currentColor">
								<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
							</svg>
							<span>You don't have any submissions for this problem!</span>
						</div>
					</section> -->
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../components/footer.php" ?>
	<script src="../../js/submission.detail.js"></script>
</body>

</html>