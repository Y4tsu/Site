<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Mon CV</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Site.css">
	</head>
	<body>
		<div class="container">
			<div class="clock">
				<div class="hour">
					<div class="hr" id="hr"></div>
				</div>
				<div class="min">
					<div class="mn" id="mn"></div>
				</div>
				<div class="sec">
					<div class="sc" id="sc"></div>
				</div>
			</div>
			<script type="text/javascript">
				const deg = 6;
				const hr = document.querySelector('#hr');
				const mn = document.querySelector('#mn');
				const sc = document.querySelector('#sc');

				setInterval(() => {

					let day = new Date();
					let hh = day.getHours() * 30;
					let mm = day.getMinutes() * deg;
					let ss = day.getSeconds() * deg;

					hr.style.transform = `rotateZ(${hh}deg`;
					mn.style.transform = `rotateZ(${mm}deg)`;
					sc.style.transform = `rotateZ(${ss}deg)`;
				})
			</script>
			<div class="networks">
				<button class="social facebook" onclick="window.location.href='https://m.facebook.com/profile.php?id=100009716673810';"></button>
				<button class="social instagram" onclick="window.location.href='https://www.instagram.com/y4tsu/';"></button>
				<button class="social discord" onclick="window.location.href='#';"></button>
				<button class="social snapchat" onclick="window.location.href='#';"></button>
				<button class="social gmail" onclick="window.location.href='#';"></button>
			</div>
			<div class="glass">
			<div class="register">
				<form>
					<div class="form">
						<h1>Register</h1>
						<label for="mail">Email address :</label>
						<input type="mail" name="mail" placeholder=" blabla@gmail.com"/>

						<label for="pwd">Your password :</label>
						<input type="password" name="pwd" placeholder=" Your password"/>

						<label for="verif">Confirm password :</label>
						<input type="password" name="verif" placeholder=" Confirm your password"/>

						<button type="submit" class="save">Register</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>
