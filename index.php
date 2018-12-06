<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>rroolliiss</title>
	<style rel="stylesheet">
		@import url('css/font-awesome.min.css');
		body:before {
			content: "";
			display: block;
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			z-index: -10;
			background: url(cool-wallpapers-hd-13.jpg) no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		body {
			font-family: 'helvetica', 'Source Sans Pro', sans-serif;
			color: white;
			font-weight: 300;
		}

		a,
		a:visited {
			text-decoration: none;
			color: #fff;
		}

		#wrapper {
			padding: 30px;
			background: rgba(0, 0, 0, 0.05);
			position: absolute;
			top: 50%;
			left: 27%;
			width: 285px;
			transform: translate(-50%, -50%);
		}

		h1 {
			font-size: 32px;
			text-align: center;
			transition-duration: 1s;
			transition-timing-function: ease-in-put;
			font-weight: 200;
		}

		h2 {
			font-size: 28px;
			text-align: center;
			transition-duration: 1s;
			transition-timing-function: ease-in-put;
			font-weight: 300;
		}

		input,
		label {
			height: 49px;
			box-shadow: 0 1px 1px #292a32;
		}

		input:not([type='submit']) {
			font-weight: 600;
			box-sizing: border-box;
			width: 235px;
			height: 49px;
			padding-right: 4px;
			padding-left: 18px;
			color: #e7e7e8;
			border-style: none;
			border-top-right-radius: 3px;
			border-bottom-right-radius: 3px;
			outline-style: none;
			background: transparent;
		}

		label {
			display: inline-block;
			width: 46px;
			text-align: center;
			vertical-align: top;
			color: #e7e7e7;
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px;
			background: transparent;
		}

		i[class^='fa'] {
			line-height: 1.5;
			color: #e7e7e7;
		}

		.input-wrapper {
			margin-bottom: 13px;
		}

		::-webkit-input-placeholder {
			color: #e7e7e7;
		}

		::-moz-placeholder {
			color: #e7e7e7;
		}

		:-moz-placeholder {
			color: #e7e7e7;
		}

		:-ms-input-placeholder {
			color: #e7e7e7;
		}

		span {
			color: #85868b;
		}

		input[type='submit'] {
			font-weight: 600;
			width: 100%;
			margin-top: 14px;
			text-transform: uppercase;
			color: #fff;
			border-style: none;
			border-radius: 3px;
			background-color: #ea4c88;
			text-shadow: #be3e6e 0 1px;
		}

		p {
			text-align: center;
		}
	</style>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Mar 1, 2018 22:00:00").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
				// Get todays date and time
				var now = new Date().getTime(); // Find the distance between now an the count down date
				var distance = countDownDate - now; // Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000); // Display the result in the element with id="demo"
				document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s "; // If the count down is finished, write some text 
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("demo").innerHTML = "NEVER :(";
				}
			}

			, 1000);
	</script>
</head>

<body>
	<div id="wrapper">
		<form autocomplete="off" action="/video/">
			<!-- Display the countdown timer in an element -->
			<h2>Countdown timer:
				<div id="demo"></div>
			</h2>
			<div class="input-wrapper">
				<h1>Welcome</h1><label for="username"><i class="fa fa-user fa-2x"></i></label><input type="text" id="username" placeholder="Username" spellcheck="false"></div>
			<div class="input-wrapper"><label for="password"><i class="fa fa-lock fa-2x"></i></label><input type="password" id="password" placeholder="Password"></div>
			<div class="input-wrapper"><input type="submit" value="Sign In">
				<p>No need to login <a href="#">Just press Sign In</a><span>&rarr;
</span></p>
			</div>
		</form>
	</div>
</body>

</html>