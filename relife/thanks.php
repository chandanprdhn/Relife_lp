<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	 <?php
    // Include another PHP file
    include '../header/header.php';
    ?>
		<meta charset="utf-8">
		<title>submission successful</title>
		<link rel="stylesheet" href="assets/css/thankss.css">
	</head>
	<body>
	 <?php
    // Include another PHP file
    include '../header/body.php';
    ?>

		<div class="text-container">
			<h1>Thank You<br><span>We have received your message and will be in contact shortly.</span></h1>
			<div class="animated-text">
				<h2>Thank you!</h2>
				<h2>धन्यवाद!</h2>
				<h2>ಧನ್ಯವಾದ</h2>
				<h2>ਤੁਹਾਡਾ ਧੰਨਵਾਦ</h2>
				<h2>Thank you!</h2>
				<h2>धन्यवाद!</h2>
				
			</div>
		</div>
		<div class="animation-container">
			<div class="burst">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>

		<script type="text/javascript">
		function createBurst(){
			let animContainer = document.querySelector('.animation-container');
			let burst = document.querySelector('.burst');

			burst.style.top = Math.random() * 550 + 'px';
			burst.style.left = Math.random() * 750 + 'px';

			let burstClone = burst.cloneNode(true);
			animContainer.appendChild(burstClone);

			setTimeout(() => {
				burstClone.remove();
			}, 20000);
		}
		setInterval(createBurst, 2000);
		</script>

	</body>
</html>
