<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php if(isset($title)){ echo $title; }?></title>

	<!-- CSS  -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.0.0/lodash.min.js"></script>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

	<!--Import stylesheet for Leaflet to work-->
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.0.0/lodash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


</head>

<style>
	html {
		background-color: papayawhip;
	}
</style>

<style type="text/css">
	#abgne_float_ad {
		display: none;
		position: absolute;
	}
	div.bigDiv {
		height: 500px;
	}
</style>


<style type="text/css">
	#slide {
		position: relative;
	}

	#slide1 {
		bottom: 0;
		min-height: 80px;
		left: 0;
		position: absolute;
		width: 100%;
		z-index: 2;
	}
</style>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<header>
<nav class="nav-wrapper grey darken-3 " role="navigation" style="opacity: 0.7" id="nav-bar">
	<div class="nav-wrapper container">
		<a id="logo-container" href="#" class="brand-logo">My Quiz</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="teacher/index.html">Teacher</a></li>
			<li><a href="student/index.html">Student</a></li>
			<li><a href="admin/index.html">Admin</a></li>
			<li><a href="#" onclick="login()">Log in</a></li>
			<li><a href="#" ">Register</a></li>
		</ul>
	</div>
</nav>

<div id="slide" class="slider" style="z-index: 100 ">

	<ul class="slides">
		<li>
			<img src="images/slide1.jpg">
			<div id="slide1" class="caption center-align">
				<h3>Welcome to My Quiz!</h3>
				<h5 class="light grey-text text-lighten-3">This is a realy convient app for both student and teacher.</h5>
			</div>
		</li>
		<li>
			<img src="images/slide3.jpg">
			<div id="slide2" class="caption left-align">
				<h3>Welcome to My Quiz!</h3>
				<h5 class="light grey-text text-lighten-3">For Student, you can easily take test online without attending school!</h5>
			</div>
		</li>
		<li>
			<img src="images/slide2.jpg">
			<div id="slide3" class="caption right-align">
				<h3>Welcome to My Quiz!</h3>
				<h5 class="light grey-text text-lighten-3">For Teacher,you can easily give a quiz online.</h5>
			</div>
		</li>
	</ul>
</div>
</header>

