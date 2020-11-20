<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sentiment Analysis Bahasa Indonesia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-26">
						Sentiment Analysis Bahasa Indonesia
					</span>

					<div class="wrap-input100 validate-input">
						<textarea class="input100" type="text" name="kalimat"></textarea>
						<span class="focus-input100" data-placeholder="Input Kalimat Bahasa Indonesia"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Uji Sentiment Analysis
							</button>
						</div>
					</div>

				</form>
				<?php
							if(isset($_POST['submit'])){
								if (PHP_SAPI != 'cli') {
									echo "<pre>";
								}

								$strings = array(
									1 => $_POST['kalimat'],
								);

								require_once __DIR__ . '/autoload.php';
								$sentiment = new \PHPInsight\Sentiment();

								$i=1;
								foreach ($strings as $string) {

									// calculations:
									$scores = $sentiment->score($string);
									$class = $sentiment->categorise($string);

									// output:
									if (in_array("pos", $scores)) {
									    echo "Got positif";
									}

									echo "\n\n<b>Hasil Sentiment</b>";
									echo "\n*Kalimat: <b>$string</b>\n";
									echo "*Arah sentimen: <b>$class</b>\n";
									echo "*nilai : ";
									// var_dump($scores);
									foreach ($scores as $skor) {
										echo $skor;
									}
									echo "\n\n";
									$i++;
								}
							}
						?>
				<div style="text-align: center; margin-bottom: -40px;"><span >Copy@2020 By: Jakfar Shodiq</span></div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
