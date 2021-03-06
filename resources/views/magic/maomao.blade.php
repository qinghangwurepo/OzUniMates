<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>这里并没有鲜鱼，但有垃圾旺</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<style type="text/css">
		@font-face {
			font-family: digit;
			src: url('digital-7_mono.ttf') format("truetype");
		}
	</style>
	<link href="/css/magic.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/magic/garden.js"></script>
	<script type="text/javascript" src="/js/magic/functions.js"></script>
</head>

<body>
	<div id="mask">
	<div id="mainDiv">
		<div id="content">
			<div id="code">
				<span class="keyword">I love you</span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />
				<span class="keyword">Say we're together, baby</span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />
				<span class="keyword">Say we're together</span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />
				<span class="keyword"></span><br />

				<span class="comments">I need you</span><br />
				<span class="comments"></span><br />
				<span class="comments"></span><br />
				<span class="comments">Need you forever, baby</span><br />
				<span class="comments"></span><br />
				<span class="comments"></span><br />
				<span class="comments">You and me.</span><br />
			</div>
			<div id="loveHeart">
				<canvas id="garden"></canvas>
				<div id="words">
					<div id="messages">
						冒冒和垃圾旺已经在澳洲共同浪荡了
						<div id="elapseClock"></div>
					</div>
					<div id="loveu">
						以后也一起<br/>走遍世界美景<br/>吃遍天下大小鲜鱼！<br/>
						<div class="signature">垃圾旺</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		var together = new Date();
		together.setFullYear(2014, 9, 19);
		together.setHours(20);
		together.setMinutes(0);
		together.setSeconds(0);
		together.setMilliseconds(0);

		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+";
			document.body.appendChild(msg);
			$("#code").css("display", "none")
			$("#copyright").css("position", "absolute");
			$("#copyright").css("bottom", "10px");
		    document.execCommand("stop");
		} else {
			setTimeout(function () {
				startHeartAnimation();
			}, 5000);

			timeElapse(together);
			setInterval(function () {
				timeElapse(together);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	</script>

		</div>
</body>
</html>
