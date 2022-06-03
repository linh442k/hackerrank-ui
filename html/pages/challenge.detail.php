<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/detail.css">

	<link rel="stylesheet" href="../../css/challenge.detail.css">

	<link rel="stylesheet" href="../../css/submission.detail.css">

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

	<title>Challenge Details</title>
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
							<a class="challenge-detail-page-content-header-item content-header-active" href="/">
								<div class="challenge-detail-page-content-header-item-detail">
									<span>Problem</span>
								</div>
							</a>
							<a class="challenge-detail-page-content-header-item" href="/">
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
			<div class="challenge-detail-page-content-container">
				<div class="challenge-detail-page-content-left-panel">
					<section class="challenge-detail-page-content-left-panel-problem">
						<div class="challenge-detail-page-content-left-panel-problem-wrapper">
							<div class="challenge-detail-page-content-left-panel-problem-description">
								<div style="margin-bottom: 60px;">
									<div class="challenge-detail-page-content-left-panel-problem-description-container">
										<div>
											<div class="challenge-detail-page-content-left-panel-problem-statement">
												<div style="margin-bottom: 10px;">
													<div class="challenge-detail-page-content-left-panel-problem-statement-content">
														<p>Alice and Bob each created one problem for HackerRank. A reviewer rates the two challenges, awarding points on a scale from <em>1</em> to <em>100</em> for three categories: <em>problem clarity</em>, <em>originality</em>, and <em>difficulty</em>. </p>

														<p>The rating for Alice's challenge is the triplet <em>a = (a[0], a[1], a[2])</em>, and the rating for Bob's challenge is the triplet <em>b = (b[0], b[1], b[2])</em>.</p>

														<p>The task is to find their <em>comparison points</em> by comparing <em>a[0]</em> with <em>b[0]</em>, <em>a[1]</em> with <em>b[1]</em>, and <em>a[2]</em> with <em>b[2]</em>. </p>

														<ul>
															<li> If <em>a[i] &gt; b[i]</em>, then Alice is awarded <em>1</em> point. </li>
															<li> If <em>a[i] &lt; b[i]</em>, then Bob is awarded <em>1</em> point. </li>
															<li> If <em>a[i] = b[i]</em>, then neither person receives a point.</li>
														</ul>

														<p>Comparison points is the total points a person earned. </p>

														<p>Given <em>a</em> and <em>b</em>, determine their respective comparison points. </p>

														<p><strong>Example</strong> </p>

														<p><em>a = [1, 2, 3]</em> <br>
															<em>b = [3, 2, 1]</em> <br>
														</p>

														<ul>
															<li>For elements *0*, Bob is awarded a point because <em>a[0] . </em></li><em>
																<li>For the equal elements <em>a[1]</em> and <em>b[1]</em>, no points are earned. </li>
																<li>Finally, for elements <em>2</em>, <em>a[2] &gt; b[2]</em> so Alice receives a point. </li>
															</em>
														</ul>
														<em>

															<p>The return array is <em>[1, 1]</em> with Alice's score first and Bob's second. </p>

															<p><strong>Function Description</strong> </p>

															<p>Complete the function <em>compareTriplets</em> in the editor below. </p>

															<p>compareTriplets has the following parameter(s): </p>

															<ul>
																<li><em>int a[3]</em>: Alice's challenge rating </li>
																<li><em>int b[3]</em>: Bob's challenge rating </li>
															</ul>

															<p><strong>Return</strong> </p>

														</em>
														<ul><em>
															</em>
															<li><em>int[2]</em>: Alice's score is in the first position, and Bob's score is in the second. </li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-input-format">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Input Format</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>The first line contains <em>3</em> space-separated integers, <em>a[0]</em>, <em>a[1]</em>, and <em>a[2]</em>, the respective values in triplet <em>a</em>. <br>
													The second line contains <em>3</em> space-separated integers, <em>b[0]</em>, <em>b[1]</em>, and <em>b[2]</em>, the respective values in triplet <em>b</em>.</p>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-constraints">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Constraints</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<ul>
													<li> <em>1 ≤ a[i] ≤ 100</em></li>
													<li> <em>1 ≤ b[i] ≤ 100</em></li>
												</ul>
											</div>

										</div>
										<div class="challenge-detail-page-content-left-panel-sample-input">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Sample Input 0</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<pre>
													<span>5 6 7</span>
													<span>3 6 10</span>
												</pre>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-sample-output">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Sample Output 0</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<pre>
													<span>1 1</span>
												</pre>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-explanation">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Explanation 0</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>In this example: </p>

												<ul>
													<li>
														<span style="font-size: 100%; display: inline-block;"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="29.726ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 12798.8 1223.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	<g transform="translate(807,0)">
																		<path stroke-width="1" d="M56 347Q56 360 70 367H707Q722 359 722 347Q722 336 708 328L390 327H72Q56 332 56 347ZM56 153Q56 168 72 173H708Q722 163 722 153Q722 140 707 133H70Q56 140 56 153Z"></path>
																	</g>
																	<g transform="translate(1863,0)">
																		<path stroke-width="1" d="M94 250Q94 319 104 381T127 488T164 576T202 643T244 695T277 729T302 750H315H319Q333 750 333 741Q333 738 316 720T275 667T226 581T184 443T167 250T184 58T225 -81T274 -167T316 -220T333 -241Q333 -250 318 -250H315H302L274 -226Q180 -141 137 -14T94 250Z"></path>
																	</g>
																	<g transform="translate(2253,0)">
																		<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	</g>
																	<g transform="translate(2782,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(3061,0)">
																		<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z"></path>
																	</g>
																	<g transform="translate(3561,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(3840,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(4285,0)">
																		<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	</g>
																	<g transform="translate(4814,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(5093,0)">
																		<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																	</g>
																	<g transform="translate(5593,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(5872,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(6317,0)">
																		<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	</g>
																	<g transform="translate(6846,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(7125,0)">
																		<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																	</g>
																	<g transform="translate(7625,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(7904,0)">
																		<path stroke-width="1" d="M60 749L64 750Q69 750 74 750H86L114 726Q208 641 251 514T294 250Q294 182 284 119T261 12T224 -76T186 -143T145 -194T113 -227T90 -246Q87 -249 86 -250H74Q66 -250 63 -250T58 -247T55 -238Q56 -237 66 -225Q221 -64 221 250T66 725Q56 737 55 738Q55 746 60 749Z"></path>
																	</g>
																	<g transform="translate(8571,0)">
																		<path stroke-width="1" d="M56 347Q56 360 70 367H707Q722 359 722 347Q722 336 708 328L390 327H72Q56 332 56 347ZM56 153Q56 168 72 173H708Q722 163 722 153Q722 140 707 133H70Q56 140 56 153Z"></path>
																	</g>
																	<g transform="translate(9627,0)">
																		<path stroke-width="1" d="M94 250Q94 319 104 381T127 488T164 576T202 643T244 695T277 729T302 750H315H319Q333 750 333 741Q333 738 316 720T275 667T226 581T184 443T167 250T184 58T225 -81T274 -167T316 -220T333 -241Q333 -250 318 -250H315H302L274 -226Q180 -141 137 -14T94 250Z"></path>
																	</g>
																	<g transform="translate(10017,0)">
																		<path stroke-width="1" d="M164 157Q164 133 148 117T109 101H102Q148 22 224 22Q294 22 326 82Q345 115 345 210Q345 313 318 349Q292 382 260 382H254Q176 382 136 314Q132 307 129 306T114 304Q97 304 95 310Q93 314 93 485V614Q93 664 98 664Q100 666 102 666Q103 666 123 658T178 642T253 634Q324 634 389 662Q397 666 402 666Q410 666 410 648V635Q328 538 205 538Q174 538 149 544L139 546V374Q158 388 169 396T205 412T256 420Q337 420 393 355T449 201Q449 109 385 44T229 -22Q148 -22 99 32T50 154Q50 178 61 192T84 210T107 214Q132 214 148 197T164 157Z"></path>
																	</g>
																	<g transform="translate(10517,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(10963,0)">
																		<path stroke-width="1" d="M42 313Q42 476 123 571T303 666Q372 666 402 630T432 550Q432 525 418 510T379 495Q356 495 341 509T326 548Q326 592 373 601Q351 623 311 626Q240 626 194 566Q147 500 147 364L148 360Q153 366 156 373Q197 433 263 433H267Q313 433 348 414Q372 400 396 374T435 317Q456 268 456 210V192Q456 169 451 149Q440 90 387 34T253 -22Q225 -22 199 -14T143 16T92 75T56 172T42 313ZM257 397Q227 397 205 380T171 335T154 278T148 216Q148 133 160 97T198 39Q222 21 251 21Q302 21 329 59Q342 77 347 104T352 209Q352 289 347 316T329 361Q302 397 257 397Z"></path>
																	</g>
																	<g transform="translate(11463,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(11908,0)">
																		<path stroke-width="1" d="M55 458Q56 460 72 567L88 674Q88 676 108 676H128V672Q128 662 143 655T195 646T364 644H485V605L417 512Q408 500 387 472T360 435T339 403T319 367T305 330T292 284T284 230T278 162T275 80Q275 66 275 52T274 28V19Q270 2 255 -10T221 -22Q210 -22 200 -19T179 0T168 40Q168 198 265 368Q285 400 349 489L395 552H302Q128 552 119 546Q113 543 108 522T98 479L95 458V455H55V458Z"></path>
																	</g>
																	<g transform="translate(12409,0)">
																		<path stroke-width="1" d="M60 749L64 750Q69 750 74 750H86L114 726Q208 641 251 514T294 250Q294 182 284 119T261 12T224 -76T186 -143T145 -194T113 -227T90 -246Q87 -249 86 -250H74Q66 -250 63 -250T58 -247T55 -238Q56 -237 66 -225Q221 -64 221 250T66 725Q56 737 55 738Q55 746 60 749Z"></path>
																	</g>
																</g>
															</svg></span>
													</li>
													<li>
														<span style="font-size: 100%; display: inline-block;"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="29.96ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 12899.3 1223.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	<g transform="translate(707,0)">
																		<path stroke-width="1" d="M56 347Q56 360 70 367H707Q722 359 722 347Q722 336 708 328L390 327H72Q56 332 56 347ZM56 153Q56 168 72 173H708Q722 163 722 153Q722 140 707 133H70Q56 140 56 153Z"></path>
																	</g>
																	<g transform="translate(1763,0)">
																		<path stroke-width="1" d="M94 250Q94 319 104 381T127 488T164 576T202 643T244 695T277 729T302 750H315H319Q333 750 333 741Q333 738 316 720T275 667T226 581T184 443T167 250T184 58T225 -81T274 -167T316 -220T333 -241Q333 -250 318 -250H315H302L274 -226Q180 -141 137 -14T94 250Z"></path>
																	</g>
																	<g transform="translate(2153,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(2582,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(2861,0)">
																		<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z"></path>
																	</g>
																	<g transform="translate(3361,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(3640,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(4085,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(4514,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(4793,0)">
																		<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																	</g>
																	<g transform="translate(5293,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(5572,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(6017,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(6446,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(6725,0)">
																		<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																	</g>
																	<g transform="translate(7225,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(7504,0)">
																		<path stroke-width="1" d="M60 749L64 750Q69 750 74 750H86L114 726Q208 641 251 514T294 250Q294 182 284 119T261 12T224 -76T186 -143T145 -194T113 -227T90 -246Q87 -249 86 -250H74Q66 -250 63 -250T58 -247T55 -238Q56 -237 66 -225Q221 -64 221 250T66 725Q56 737 55 738Q55 746 60 749Z"></path>
																	</g>
																	<g transform="translate(8171,0)">
																		<path stroke-width="1" d="M56 347Q56 360 70 367H707Q722 359 722 347Q722 336 708 328L390 327H72Q56 332 56 347ZM56 153Q56 168 72 173H708Q722 163 722 153Q722 140 707 133H70Q56 140 56 153Z"></path>
																	</g>
																	<g transform="translate(9227,0)">
																		<path stroke-width="1" d="M94 250Q94 319 104 381T127 488T164 576T202 643T244 695T277 729T302 750H315H319Q333 750 333 741Q333 738 316 720T275 667T226 581T184 443T167 250T184 58T225 -81T274 -167T316 -220T333 -241Q333 -250 318 -250H315H302L274 -226Q180 -141 137 -14T94 250Z"></path>
																	</g>
																	<g transform="translate(9617,0)">
																		<path stroke-width="1" d="M127 463Q100 463 85 480T69 524Q69 579 117 622T233 665Q268 665 277 664Q351 652 390 611T430 522Q430 470 396 421T302 350L299 348Q299 347 308 345T337 336T375 315Q457 262 457 175Q457 96 395 37T238 -22Q158 -22 100 21T42 130Q42 158 60 175T105 193Q133 193 151 175T169 130Q169 119 166 110T159 94T148 82T136 74T126 70T118 67L114 66Q165 21 238 21Q293 21 321 74Q338 107 338 175V195Q338 290 274 322Q259 328 213 329L171 330L168 332Q166 335 166 348Q166 366 174 366Q202 366 232 371Q266 376 294 413T322 525V533Q322 590 287 612Q265 626 240 626Q208 626 181 615T143 592T132 580H135Q138 579 143 578T153 573T165 566T175 555T183 540T186 520Q186 498 172 481T127 463Z"></path>
																	</g>
																	<g transform="translate(10117,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(10563,0)">
																		<path stroke-width="1" d="M42 313Q42 476 123 571T303 666Q372 666 402 630T432 550Q432 525 418 510T379 495Q356 495 341 509T326 548Q326 592 373 601Q351 623 311 626Q240 626 194 566Q147 500 147 364L148 360Q153 366 156 373Q197 433 263 433H267Q313 433 348 414Q372 400 396 374T435 317Q456 268 456 210V192Q456 169 451 149Q440 90 387 34T253 -22Q225 -22 199 -14T143 16T92 75T56 172T42 313ZM257 397Q227 397 205 380T171 335T154 278T148 216Q148 133 160 97T198 39Q222 21 251 21Q302 21 329 59Q342 77 347 104T352 209Q352 289 347 316T329 361Q302 397 257 397Z"></path>
																	</g>
																	<g transform="translate(11063,0)">
																		<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																	</g>
																	<g transform="translate(11508,0)">
																		<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																		<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z" transform="translate(500,0)"></path>
																	</g>
																	<g transform="translate(12509,0)">
																		<path stroke-width="1" d="M60 749L64 750Q69 750 74 750H86L114 726Q208 641 251 514T294 250Q294 182 284 119T261 12T224 -76T186 -143T145 -194T113 -227T90 -246Q87 -249 86 -250H74Q66 -250 63 -250T58 -247T55 -238Q56 -237 66 -225Q221 -64 221 250T66 725Q56 737 55 738Q55 746 60 749Z"></path>
																	</g>
																</g>
															</svg></span>
													</li>
												</ul>

												<p>Now, let's compare each individual score:</p>

												<ul>
													<li>
														<span style="font-size: 100%; display: inline-block;">
															<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="10.238ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 4408.1 1223.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	<g transform="translate(529,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(808,0)">
																		<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z"></path>
																	</g>
																	<g transform="translate(1308,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(1864,0)">
																		<path stroke-width="1" d="M84 520Q84 528 88 533T96 539L99 540Q106 540 253 471T544 334L687 265Q694 260 694 250T687 235Q685 233 395 96L107 -40H101Q83 -38 83 -20Q83 -19 83 -17Q82 -10 98 -1Q117 9 248 71Q326 108 378 132L626 250L378 368Q90 504 86 509Q84 513 84 520Z"></path>
																	</g>
																	<g transform="translate(2921,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(3350,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(3629,0)">
																		<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z"></path>
																	</g>
																	<g transform="translate(4129,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																</g>
															</svg>
														</span>
														, so Alice receives
														<span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-4-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="1.162ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 500.5 936.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																</g>
															</svg></span> point.
													</li>
													<li>
														<span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-5-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="10.238ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 4408.1 1223.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	<g transform="translate(529,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(808,0)">
																		<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																	</g>
																	<g transform="translate(1308,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(1864,0)">
																		<path stroke-width="1" d="M56 347Q56 360 70 367H707Q722 359 722 347Q722 336 708 328L390 327H72Q56 332 56 347ZM56 153Q56 168 72 173H708Q722 163 722 153Q722 140 707 133H70Q56 140 56 153Z"></path>
																	</g>
																	<g transform="translate(2921,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(3350,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(3629,0)">
																		<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																	</g>
																	<g transform="translate(4129,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																</g>
															</svg></span>, so nobody receives a point.

													</li>
													<li>
														<span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-6-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="10.238ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 4408.1 1223.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M33 157Q33 258 109 349T280 441Q331 441 370 392Q386 422 416 422Q429 422 439 414T449 394Q449 381 412 234T374 68Q374 43 381 35T402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487Q506 153 506 144Q506 138 501 117T481 63T449 13Q436 0 417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157ZM351 328Q351 334 346 350T323 385T277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q217 26 254 59T298 110Q300 114 325 217T351 328Z"></path>
																	<g transform="translate(529,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(808,0)">
																		<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																	</g>
																	<g transform="translate(1308,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																	<g transform="translate(1864,0)">
																		<path stroke-width="1" d="M694 -11T694 -19T688 -33T678 -40Q671 -40 524 29T234 166L90 235Q83 240 83 250Q83 261 91 266Q664 540 678 540Q681 540 687 534T694 519T687 505Q686 504 417 376L151 250L417 124Q686 -4 687 -5Q694 -11 694 -19Z"></path>
																	</g>
																	<g transform="translate(2921,0)">
																		<path stroke-width="1" d="M73 647Q73 657 77 670T89 683Q90 683 161 688T234 694Q246 694 246 685T212 542Q204 508 195 472T180 418L176 399Q176 396 182 402Q231 442 283 442Q345 442 383 396T422 280Q422 169 343 79T173 -11Q123 -11 82 27T40 150V159Q40 180 48 217T97 414Q147 611 147 623T109 637Q104 637 101 637H96Q86 637 83 637T76 640T73 647ZM336 325V331Q336 405 275 405Q258 405 240 397T207 376T181 352T163 330L157 322L136 236Q114 150 114 114Q114 66 138 42Q154 26 178 26Q211 26 245 58Q270 81 285 114T318 219Q336 291 336 325Z"></path>
																	</g>
																	<g transform="translate(3350,0)">
																		<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																	</g>
																	<g transform="translate(3629,0)">
																		<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																	</g>
																	<g transform="translate(4129,0)">
																		<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																	</g>
																</g>
															</svg></span>, so Bob receives <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-7-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="1.162ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 500.5 936.9" role="img" focusable="false">
																<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																</g>
															</svg></span> point.

													</li>
												</ul>

												<p>Alice's comparison score is <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-8-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="1.162ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 500.5 936.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
															</g>
														</svg></span>
													, and Bob's comparison score is <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-9-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="1.162ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 500.5 936.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
															</g>
														</svg></span>. Thus, we return the array <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-10-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4.653ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 2003.2 1223.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																<g transform="translate(278,0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																</g>
																<g transform="translate(779,0)">
																	<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																</g>
																<g transform="translate(1224,0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																</g>
																<g transform="translate(1724,0)">
																	<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																</g>
															</g>
														</svg></span>. </p>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-sample-input">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Sample Input 1</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<pre>
													<span>17 28 30</span>
													<span>99 16 8</span>
												</pre>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-sample-output">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Sample Output 1</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<pre>
													<span>2 1</span>
												</pre>
											</div>
										</div>
										<div class="challenge-detail-page-content-left-panel-sample-explanation">
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>
													<strong>Explanation 1</strong>
												</p>
											</div>
											<div class="challenge-detail-page-content-left-panel-problem-statement-content ">
												<p>Comparing the <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-1-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="2.935ex" height="2.676ex" style="vertical-align: -0.338ex;" viewBox="0 -1006.6 1263.8 1152.1" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z"></path>
																<g transform="translate(500,393)">
																	<path stroke-width="1" transform="scale(0.707)" d="M26 385Q19 392 19 395Q19 399 22 411T27 425Q29 430 36 430T87 431H140L159 511Q162 522 166 540T173 566T179 586T187 603T197 615T211 624T229 626Q247 625 254 615T261 596Q261 589 252 549T232 470L222 433Q222 431 272 431H323Q330 424 330 420Q330 398 317 385H210L174 240Q135 80 135 68Q135 26 162 26Q197 26 230 60T283 144Q285 150 288 151T303 153H307Q322 153 322 145Q322 142 319 133Q314 117 301 95T267 48T216 6T155 -11Q125 -11 98 4T59 56Q57 64 57 83V101L92 241Q127 382 128 383Q128 385 77 385H26Z"></path>
																	<g transform="translate(255,0)">
																		<path stroke-width="1" transform="scale(0.707)" d="M137 683Q138 683 209 688T282 694Q294 694 294 685Q294 674 258 534Q220 386 220 383Q220 381 227 388Q288 442 357 442Q411 442 444 415T478 336Q478 285 440 178T402 50Q403 36 407 31T422 26Q450 26 474 56T513 138Q516 149 519 151T535 153Q555 153 555 145Q555 144 551 130Q535 71 500 33Q466 -10 419 -10H414Q367 -10 346 17T325 74Q325 90 361 192T398 345Q398 404 354 404H349Q266 404 205 306L198 293L164 158Q132 28 127 16Q114 -11 83 -11Q69 -11 59 -2T48 16Q48 30 121 320L195 616Q195 629 188 632T149 637H128Q122 643 122 645T124 664Q129 683 137 683Z"></path>
																	</g>
																</g>
															</g>
														</svg></span> elements, <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-2-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="7.748ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 3336.1 936.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																<path stroke-width="1" d="M55 458Q56 460 72 567L88 674Q88 676 108 676H128V672Q128 662 143 655T195 646T364 644H485V605L417 512Q408 500 387 472T360 435T339 403T319 367T305 330T292 284T284 230T278 162T275 80Q275 66 275 52T274 28V19Q270 2 255 -10T221 -22Q210 -22 200 -19T179 0T168 40Q168 198 265 368Q285 400 349 489L395 552H302Q128 552 119 546Q113 543 108 522T98 479L95 458V455H55V458Z" transform="translate(500,0)"></path>
																<g transform="translate(1278,0)">
																	<path stroke-width="1" d="M694 -11T694 -19T688 -33T678 -40Q671 -40 524 29T234 166L90 235Q83 240 83 250Q83 261 91 266Q664 540 678 540Q681 540 687 534T694 519T687 505Q686 504 417 376L151 250L417 124Q686 -4 687 -5Q694 -11 694 -19Z"></path>
																</g>
																<g transform="translate(2335,0)">
																	<path stroke-width="1" d="M352 287Q304 211 232 211Q154 211 104 270T44 396Q42 412 42 436V444Q42 537 111 606Q171 666 243 666Q245 666 249 666T257 665H261Q273 665 286 663T323 651T370 619T413 560Q456 472 456 334Q456 194 396 97Q361 41 312 10T208 -22Q147 -22 108 7T68 93T121 149Q143 149 158 135T173 96Q173 78 164 65T148 49T135 44L131 43Q131 41 138 37T164 27T206 22H212Q272 22 313 86Q352 142 352 280V287ZM244 248Q292 248 321 297T351 430Q351 508 343 542Q341 552 337 562T323 588T293 615T246 625Q208 625 181 598Q160 576 154 546T147 441Q147 358 152 329T172 282Q197 248 244 248Z"></path>
																	<path stroke-width="1" d="M352 287Q304 211 232 211Q154 211 104 270T44 396Q42 412 42 436V444Q42 537 111 606Q171 666 243 666Q245 666 249 666T257 665H261Q273 665 286 663T323 651T370 619T413 560Q456 472 456 334Q456 194 396 97Q361 41 312 10T208 -22Q147 -22 108 7T68 93T121 149Q143 149 158 135T173 96Q173 78 164 65T148 49T135 44L131 43Q131 41 138 37T164 27T206 22H212Q272 22 313 86Q352 142 352 280V287ZM244 248Q292 248 321 297T351 430Q351 508 343 542Q341 552 337 562T323 588T293 615T246 625Q208 625 181 598Q160 576 154 546T147 441Q147 358 152 329T172 282Q197 248 244 248Z" transform="translate(500,0)"></path>
																</g>
															</g>
														</svg></span> so Bob receives a point. <br>
													Comparing the <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-3-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="2.759ex" height="2.509ex" style="vertical-align: -0.338ex;" viewBox="0 -934.9 1188.1 1080.4" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																<g transform="translate(500,393)">
																	<path stroke-width="1" transform="scale(0.707)" d="M131 289Q131 321 147 354T203 415T300 442Q362 442 390 415T419 355Q419 323 402 308T364 292Q351 292 340 300T328 326Q328 342 337 354T354 372T367 378Q368 378 368 379Q368 382 361 388T336 399T297 405Q249 405 227 379T204 326Q204 301 223 291T278 274T330 259Q396 230 396 163Q396 135 385 107T352 51T289 7T195 -10Q118 -10 86 19T53 87Q53 126 74 143T118 160Q133 160 146 151T160 120Q160 94 142 76T111 58Q109 57 108 57T107 55Q108 52 115 47T146 34T201 27Q237 27 263 38T301 66T318 97T323 122Q323 150 302 164T254 181T195 196T148 231Q131 256 131 289Z"></path>
																	<g transform="translate(331,0)">
																		<path stroke-width="1" transform="scale(0.707)" d="M26 385Q19 392 19 395Q19 399 22 411T27 425Q29 430 36 430T87 431H140L159 511Q162 522 166 540T173 566T179 586T187 603T197 615T211 624T229 626Q247 625 254 615T261 596Q261 589 252 549T232 470L222 433Q222 431 272 431H323Q330 424 330 420Q330 398 317 385H210L174 240Q135 80 135 68Q135 26 162 26Q197 26 230 60T283 144Q285 150 288 151T303 153H307Q322 153 322 145Q322 142 319 133Q314 117 301 95T267 48T216 6T155 -11Q125 -11 98 4T59 56Q57 64 57 83V101L92 241Q127 382 128 383Q128 385 77 385H26Z"></path>
																	</g>
																</g>
															</g>
														</svg></span> and <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-4-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="3.241ex" height="2.676ex" style="vertical-align: -0.338ex;" viewBox="0 -1006.6 1395.3 1152.1" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																<g transform="translate(500,393)">
																	<path stroke-width="1" transform="scale(0.707)" d="M21 287Q22 293 24 303T36 341T56 388T89 425T135 442Q171 442 195 424T225 390T231 369Q231 367 232 367L243 378Q304 442 382 442Q436 442 469 415T503 336T465 179T427 52Q427 26 444 26Q450 26 453 27Q482 32 505 65T540 145Q542 153 560 153Q580 153 580 145Q580 144 576 130Q568 101 554 73T508 17T439 -10Q392 -10 371 17T350 73Q350 92 386 193T423 345Q423 404 379 404H374Q288 404 229 303L222 291L189 157Q156 26 151 16Q138 -11 108 -11Q95 -11 87 -5T76 7T74 17Q74 30 112 180T152 343Q153 348 153 366Q153 405 129 405Q91 405 66 305Q60 285 60 284Q58 278 41 278H27Q21 284 21 287Z"></path>
																	<g transform="translate(424,0)">
																		<path stroke-width="1" transform="scale(0.707)" d="M366 683Q367 683 438 688T511 694Q523 694 523 686Q523 679 450 384T375 83T374 68Q374 26 402 26Q411 27 422 35Q443 55 463 131Q469 151 473 152Q475 153 483 153H487H491Q506 153 506 145Q506 140 503 129Q490 79 473 48T445 8T417 -8Q409 -10 393 -10Q359 -10 336 5T306 36L300 51Q299 52 296 50Q294 48 292 46Q233 -10 172 -10Q117 -10 75 30T33 157Q33 205 53 255T101 341Q148 398 195 420T280 442Q336 442 364 400Q369 394 369 396Q370 400 396 505T424 616Q424 629 417 632T378 637H357Q351 643 351 645T353 664Q358 683 366 683ZM352 326Q329 405 277 405Q242 405 210 374T160 293Q131 214 119 129Q119 126 119 118T118 106Q118 61 136 44T179 26Q233 26 290 98L298 109L352 326Z"></path>
																	</g>
																</g>
															</g>
														</svg></span> elements, <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-5-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="7.748ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 3336.1 936.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																<path stroke-width="1" d="M70 417T70 494T124 618T248 666Q319 666 374 624T429 515Q429 485 418 459T392 417T361 389T335 371T324 363L338 354Q352 344 366 334T382 323Q457 264 457 174Q457 95 399 37T249 -22Q159 -22 101 29T43 155Q43 263 172 335L154 348Q133 361 127 368Q70 417 70 494ZM286 386L292 390Q298 394 301 396T311 403T323 413T334 425T345 438T355 454T364 471T369 491T371 513Q371 556 342 586T275 624Q268 625 242 625Q201 625 165 599T128 534Q128 511 141 492T167 463T217 431Q224 426 228 424L286 386ZM250 21Q308 21 350 55T392 137Q392 154 387 169T375 194T353 216T330 234T301 253T274 270Q260 279 244 289T218 306L210 311Q204 311 181 294T133 239T107 157Q107 98 150 60T250 21Z" transform="translate(500,0)"></path>
																<g transform="translate(1278,0)">
																	<path stroke-width="1" d="M84 520Q84 528 88 533T96 539L99 540Q106 540 253 471T544 334L687 265Q694 260 694 250T687 235Q685 233 395 96L107 -40H101Q83 -38 83 -20Q83 -19 83 -17Q82 -10 98 -1Q117 9 248 71Q326 108 378 132L626 250L378 368Q90 504 86 509Q84 513 84 520Z"></path>
																</g>
																<g transform="translate(2335,0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																	<path stroke-width="1" d="M42 313Q42 476 123 571T303 666Q372 666 402 630T432 550Q432 525 418 510T379 495Q356 495 341 509T326 548Q326 592 373 601Q351 623 311 626Q240 626 194 566Q147 500 147 364L148 360Q153 366 156 373Q197 433 263 433H267Q313 433 348 414Q372 400 396 374T435 317Q456 268 456 210V192Q456 169 451 149Q440 90 387 34T253 -22Q225 -22 199 -14T143 16T92 75T56 172T42 313ZM257 397Q227 397 205 380T171 335T154 278T148 216Q148 133 160 97T198 39Q222 21 251 21Q302 21 329 59Q342 77 347 104T352 209Q352 289 347 316T329 361Q302 397 257 397Z" transform="translate(500,0)"></path>
																</g>
															</g>
														</svg></span> and <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-6-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="6.586ex" height="2.176ex" style="vertical-align: -0.338ex;" viewBox="0 -791.3 2835.6 936.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M127 463Q100 463 85 480T69 524Q69 579 117 622T233 665Q268 665 277 664Q351 652 390 611T430 522Q430 470 396 421T302 350L299 348Q299 347 308 345T337 336T375 315Q457 262 457 175Q457 96 395 37T238 -22Q158 -22 100 21T42 130Q42 158 60 175T105 193Q133 193 151 175T169 130Q169 119 166 110T159 94T148 82T136 74T126 70T118 67L114 66Q165 21 238 21Q293 21 321 74Q338 107 338 175V195Q338 290 274 322Q259 328 213 329L171 330L168 332Q166 335 166 348Q166 366 174 366Q202 366 232 371Q266 376 294 413T322 525V533Q322 590 287 612Q265 626 240 626Q208 626 181 615T143 592T132 580H135Q138 579 143 578T153 573T165 566T175 555T183 540T186 520Q186 498 172 481T127 463Z"></path>
																<path stroke-width="1" d="M96 585Q152 666 249 666Q297 666 345 640T423 548Q460 465 460 320Q460 165 417 83Q397 41 362 16T301 -15T250 -22Q224 -22 198 -16T137 16T82 83Q39 165 39 320Q39 494 96 585ZM321 597Q291 629 250 629Q208 629 178 597Q153 571 145 525T137 333Q137 175 145 125T181 46Q209 16 250 16Q290 16 318 46Q347 76 354 130T362 333Q362 478 354 524T321 597Z" transform="translate(500,0)"></path>
																<g transform="translate(1278,0)">
																	<path stroke-width="1" d="M84 520Q84 528 88 533T96 539L99 540Q106 540 253 471T544 334L687 265Q694 260 694 250T687 235Q685 233 395 96L107 -40H101Q83 -38 83 -20Q83 -19 83 -17Q82 -10 98 -1Q117 9 248 71Q326 108 378 132L626 250L378 368Q90 504 86 509Q84 513 84 520Z"></path>
																</g>
																<g transform="translate(2335,0)">
																	<path stroke-width="1" d="M70 417T70 494T124 618T248 666Q319 666 374 624T429 515Q429 485 418 459T392 417T361 389T335 371T324 363L338 354Q352 344 366 334T382 323Q457 264 457 174Q457 95 399 37T249 -22Q159 -22 101 29T43 155Q43 263 172 335L154 348Q133 361 127 368Q70 417 70 494ZM286 386L292 390Q298 394 301 396T311 403T323 413T334 425T345 438T355 454T364 471T369 491T371 513Q371 556 342 586T275 624Q268 625 242 625Q201 625 165 599T128 534Q128 511 141 492T167 463T217 431Q224 426 228 424L286 386ZM250 21Q308 21 350 55T392 137Q392 154 387 169T375 194T353 216T330 234T301 253T274 270Q260 279 244 289T218 306L210 311Q204 311 181 294T133 239T107 157Q107 98 150 60T250 21Z"></path>
																</g>
															</g>
														</svg></span> so Alice receives two points. <br>
													The return array is <span style="font-size: 100%; display: inline-block;" class="MathJax_SVG" id="MathJax-Element-7-Frame"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="4.653ex" height="2.843ex" style="vertical-align: -0.838ex;" viewBox="0 -863.1 2003.2 1223.9" role="img" focusable="false">
															<g stroke="currentColor" fill="currentColor" stroke-width="0" transform="matrix(1 0 0 -1 0 0)">
																<path stroke-width="1" d="M118 -250V750H255V710H158V-210H255V-250H118Z"></path>
																<g transform="translate(278,0)">
																	<path stroke-width="1" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path>
																</g>
																<g transform="translate(779,0)">
																	<path stroke-width="1" d="M78 35T78 60T94 103T137 121Q165 121 187 96T210 8Q210 -27 201 -60T180 -117T154 -158T130 -185T117 -194Q113 -194 104 -185T95 -172Q95 -168 106 -156T131 -126T157 -76T173 -3V9L172 8Q170 7 167 6T161 3T152 1T140 0Q113 0 96 17Z"></path>
																</g>
																<g transform="translate(1224,0)">
																	<path stroke-width="1" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path>
																</g>
																<g transform="translate(1724,0)">
																	<path stroke-width="1" d="M22 710V750H159V-250H22V-210H119V710H22Z"></path>
																</g>
															</g>
														</svg></span>. </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="challenge-detail-page-content-left-panel-problem">
						<!-- <div style="min-height: 90px;"></div> -->
						<?php require_once "../components/editor.php" ?>
					</section>
					<section>
						<div class="challenge-detail-page-editor-footer">
							<button class="submit-challenge-code">
								<div><span>Submit Code</span></div>
							</button>
							<button class="run-challenge-code">
								<div><span>Run Code</span></div>
							</button>
						</div>
						<div class="challenge-detail-page-editor-custom-test">
							<div class="checkbox">
								<div class="custom-test-checker">
									<label>
										<div class="checkbox-wrap">
											<input type="checkbox" class="checkbox-input" id="custom-test-input-checkbox">
											<span>
												<svg viewBox="0 0 24 24" width="1em" height="1em" class="checkbox__check-icon ui-svg-icon" fill="currentColor">
													<path d="M9 18c-.3 0-.5-.1-.7-.3l-5-5c-.4-.4-.4-1 0-1.4s1-.4 1.4 0L9 15.6 19.3 5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11 11c-.2.2-.4.3-.7.3z">
													</path>
												</svg>
											</span>
										</div>
										<div class="label">Test against custom input</div>
									</label>
								</div>
								<div>
									<textarea id="custom-test-input-text" rows="5" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"></textarea>
								</div>
							</div>
						</div>
					</section>
					<section>
						<div class="challenge-detail-problem-responder-container">
							<div class="challenge-detail-problem-responder-compile-error">
								<div class="challenge-detail-problem-responder-compile-error-header">
									<p>Compilation error :(</p>
								</div>
								<div class="challenge-detail-problem-responder-compile-error-detail">
									<div>
										<div class="compile-message">
											<p>
												Compile Message
											</p>
											<pre><code>Sorry: IndentationError: expected an indented block (Solution.py, line 19)
											</code></pre>
										</div>
										<div class="exit-status">
											<p>
												Exit Status
											</p>
											<pre><code>1
											</code></pre>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>

					<section>
						<div class="challenge-detail-problem-responder-container">
							<div class="challenge-detail-problem-responder-compile-error">
								<div class="challenge-detail-problem-responder-compile-error-header">
									<p>Runtime error :(</p>
									<div>
										<p class="compile-advice">Click the Submit Code button to run your code against all the test cases.</p>
									</div>
								</div>
								<div class="submission-detail-test-case-info-wrapper runtime-error">
									<div class="submission-detail-test-case-info-public">
										<div>
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
													Your Output (stdout)
												</div>
												<div class="submission-detail-test-case-info-output-body">
													~ no response on stdout ~
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>

					<section>
						<div class="challenge-detail-problem-responder-container">
							<div class="challenge-detail-problem-responder-compile-error">
								<div class="challenge-detail-problem-responder-compile-error-header">
									<p>2/2 test cases failed</p>
								</div>
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
														<div class="submission-detail-test-case-info-public">
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
														</div>
														<!-- <div class="submission-detail-test-case-info-hidden">
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
												</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section>
						<div class="challenge-detail-problem-responder-container">
							<div class="challenge-detail-problem-responder-compile-error">
								<div class="challenge-detail-problem-responder-compile-error-header">
									<p>Wrong Answer :(</p>
								</div>
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
																<span class="submission-detail-test-case-number">Sample Test case 0</span>
															</div>
														</button>
														<button class="submission-detail-test-case">
															<div class="submission-detail-test-case-btn-error">
																<svg viewBox="0 0 100 100" width="1em" height="1em" role="img" aria-label="Failed" class="tab-item__status-icon ui-svg-icon" fill="currentColor">
																	<path d="M88.184 81.468a3.008 3.008 0 0 1 0 4.242l-2.475 2.475a3.008 3.008 0 0 1-4.242 0l-69.65-69.65a3.008 3.008 0 0 1 0-4.242l2.476-2.476a3.008 3.008 0 0 1 4.242 0l69.649 69.651z"></path>
																	<path d="M18.532 88.184a3.01 3.01 0 0 1-4.242 0l-2.475-2.475a3.008 3.008 0 0 1 0-4.242l69.65-69.651a3.008 3.008 0 0 1 4.242 0l2.476 2.476a3.01 3.01 0 0 1 0 4.242l-69.651 69.65z"></path>
																</svg>
																<span class="submission-detail-test-case-number">Sample Test case 1</span>
															</div>
														</button>
													</div>
													<div class="submission-detail-test-case-info-wrapper">
														<div class="submission-detail-test-case-info-public">
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
																		Your Output (stdout)
																	</div>
																	<div class="submission-detail-test-case-info-output-body">
																		5 6 7wer werwerwer



																		<br>
																		3 6 10
																	</div>
																</div>
																<div class="submission-detail-test-case-info-output">
																	<div class="submission-detail-test-case-info-output-header">
																		Expected Output
																	</div>
																	<div class="submission-detail-test-case-info-output-body">
																		5 6 7wer werwerwer

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
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="challenge-detail-page-content-left-panel-hidden-problem">
						<div>
							<svg viewBox="0 0 24 24" width="1em" height="1em" class=" ui-svg-icon" fill="currentColor">
								<path d="M19 10h-1V7c0-3.3-2.7-6-6-6S6 3.7 6 7v3H5c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM8 7c0-2.2 1.8-4 4-4s4 1.8 4 4v3H8V7zm12 13c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1v-7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v7z"></path>
							</svg>
							<span>This Challenge Is Not Public</span>
						</div>
					</section>
				</div>
				<div class="challenge-detail-page-content-right-panel">
					<aside>
						<div class="challenge-detail-page-content-right-panel-container">
							<div class="challenge-detail-page-content-right-panel-detail">
								<div class="challenge-detail-page-content-right-panel-detail-item">
									<p class="challenge-detail-page-content-right-panel-detail-item-label">Author</p>
									<div style="display: inline;">
										<a class="challenge-detail-page-content-right-panel-detail-author" href="/">Shafaet</a>
									</div>
								</div>
								<div class="challenge-detail-page-content-right-panel-detail-item">
									<p class="challenge-detail-page-content-right-panel-detail-item-label">Max Score</p>
									<div style="display: inline; color: #39424e" class="challenge-detail-page-content-right-panel-detail-max-score">
										10
									</div>
								</div>
								<hr class="challenge-detail-hr">
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<?php require_once "../components/footer.php" ?>
	</div>
	<script src="../../js/challenge.detail.js"></script>
</body>

</html>