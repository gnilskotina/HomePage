<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Tab Home</title>
	<meta name="description" content="New tab page">


	<link rel="stylesheet" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="main.js"></script>

</head>

<body>
	<div class="parent">

		<div class="container child">
			<section id="sectfortime" class='clearfix'>
				<div id="timeArea" style="float: left;">
					<p class="time"><span class="timeInner"></span> <span class="date"></span></p>
					<div id='wether'></div>
					<script>
						let city = 'YOURCITY'
						let elem = document.getElementById('wether');
						$.ajax({
							"url": "https://wttr.in/" + city + "?format=3",
							"method": "get",
							data: "",
							processData: false,
							success: function (data) {
								console.log(data);
								data1 = data
								elem.innerHTML = data;
							}
						})
					</script>
				</div>
				<pre id='art'>
       ,::////;::-.
      /:'///// ``::>/|/
    .',  ||||    `/( e\
-==~-'`-Xm````-mm-' `-_\
</pre>



			</section>
			<div id="searchForm">
				<form action="" method="post">
					<input type="text" name="s" value="" placeholder="Search" />
				</form>
			</div>

			<section id="linkArea" class="clearfix">
				<div class='half'>
					<h3>links</h3>
					<ul class="links">
						<li><a href="LINK">NAMELINK</a></li>
						<li><a href="LINK">NAMELINK<a></li>
						<li><a href="LINK">NAMELINK</a></li>
					</ul>
				</div>

				<div class='half'>
					<h3>links</h3>
					<ul class="links">
						<li><a href="LINK">NAMELINK</a></li>
						<li><a href="LINK/">NAMELINK</a></li>
						<li><a href="LINK/">NAMELINK</a></li>
					</ul>

					<!-- Show or hide by pressing 'home' -->
					<div class="hideable hide">
						<h3 class="alt" id="hiden">hidden links</h3>
						<ul class="links">
							<li><a href="LINK">NAMELINK</a></li>
							<li><a href="LINK">NAMELINK</a></li>
						</ul>
					</div>
				</div>


			</section>

		</div>
	</div>
</body>

</html>