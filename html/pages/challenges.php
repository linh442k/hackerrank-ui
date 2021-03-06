<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/challenges.css">

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

	<title>Challenges</title>
</head>

<body>
	<div class="page-content-wrapper">
		<?php require_once "../components/header.php" ?>
		<div class="challenges-page-title-wrapper" style="display: block;">
			<div class="challenges-page-title">
				<div>
					<div class="challenges-page-title-content">
						All Challenges
					</div>
				</div>
			</div>
		</div>
		<div class="challenges-page-content" style="min-height: 800px;">
			<div class="challenges-list">
				<div class="challenges-list-container">
					<div class="challenges-list-wrapper">
						<section class="challenges-list-left-panel">
							<div>
								<div class="challenges-list-menu">
									<a class="challenges-list-item" href="/">
										<div class="challenges-list-item-view">
											<div class="challenges-list-item-content">
												<div class="challenges-list-item-content-body">
													<header class="challenges-list-item-content-header">
														<div class="challenges-item-name">
															<div style="float: left; ">
																<h4 class="challenges-item-name-title">
																	Welcome to Java!
																	<div class="challenges-item-name-details">
																		<span class="challenges-item-name-detail">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, fuga voluptatem soluta ducimus sint velit provident eligendi perspiciatis eveniet et, quidem praesentium, cupiditate similique qui expedita odit dolore fugiat. Sed.</span>
																	</div>
																</h4>
															</div>
														</div>
														<div class="challenges-item-container">
															<div class="challenges-item-btn">
																<button>
																	<div>
																		<span>Solve Challenge</span>
																	</div>
																</button>
															</div>
														</div>
													</header>
												</div>
											</div>
										</div>
									</a>
									<a class="challenges-list-item" href="/">
										<div class="challenges-list-item-view">
											<div class="challenges-list-item-content">
												<div class="challenges-list-item-content-body">
													<header class="challenges-list-item-content-header">
														<div class="challenges-item-name">
															<div style="float: left; ">
																<h4 class="challenges-item-name-title">
																	Hello World
																	<!-- <div class="challenges-item-name-details">
																		<span class="challenges-item-name-detail">Easy</span>
																	</div> -->
																</h4>
															</div>
														</div>
														<div class="challenges-item-container">
															<div class="challenges-item-btn">
																<button>
																	<div>
																		<span>Solve Challenge</span>
																	</div>
																</button>
															</div>
														</div>
													</header>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</section>
						<section class="challenges-list-right-panel">
							<div class="challenges-list-right-panel-wrapper">
								<div class="challenges-list-right-panel-outer-wrapper">
									<div>
										<section class="challenges-list-filter">

											<div class="challenges-list-filter-group">
												<div class="challenges-list-filter-group-title">
													Status
												</div>
												<div class="challenges-list-filter-group-items">
													<div>
														<div class="challenges-list-filter-group-items-container">
															<div class="challenges-list-filter-group-item">
																<div class="challenges-list-filter-group-item-wrapper">
																	<div>
																		<label class="challenges-list-filter-group-item-label">
																			<div class="challenges-list-filter-group-item-checkbox checked">
																				<input type="checkbox" value="solved">
																				<span class="custom-checkbox"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor">
																						<path d="M9 18c-.3 0-.5-.1-.7-.3l-5-5c-.4-.4-.4-1 0-1.4s1-.4 1.4 0L9 15.6 19.3 5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z"></path>
																					</svg></span>
																			</div>
																			<div class="challenges-list-filter-group-item-content">
																				Solved
																			</div>
																		</label>
																	</div>
																</div>
															</div>
															<div class="challenges-list-filter-group-item">
																<div class="challenges-list-filter-group-item-wrapper">
																	<div>
																		<label class="challenges-list-filter-group-item-label">
																			<div class="challenges-list-filter-group-item-checkbox">
																				<input type="checkbox" value="solved">
																				<span class="custom-checkbox"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor">
																						<path d="M9 18c-.3 0-.5-.1-.7-.3l-5-5c-.4-.4-.4-1 0-1.4s1-.4 1.4 0L9 15.6 19.3 5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z"></path>
																					</svg></span>
																			</div>
																			<div class="challenges-list-filter-group-item-content">
																				Unsolved
																			</div>

																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</section>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
		<?php require_once "../components/footer.php" ?>
	</div>
	<script src="../../js/challenges.js"></script>
</body>

</html>