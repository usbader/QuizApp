<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSS  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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
	
	thead {
    background-color: #505050;
    color: white;
}

	tbody {
    background-color: #FFFFFF;
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
			<li><a href="#">Welcome Bader!</a></li>
			<li><a class="waves-effect modal-trigger" href="manageCourses.html">Manage courses</a></li>
 </ul>
	</div>
</nav>


</header>

<main>


<div class="container">

<div class="row">

</div>

<div class="row">


        <label>Select semester</label>
  <select class="browser-default">
    <option value="" >Choose your option</option>
    <option value="1" disabled selected>Spring 2016</option>
    <option value="2">Summer 2016</option>
    <option value="3">Fall 2016</option>
  </select>
</div>

  <div class="row">
    <div class="col s12">
    
  
  
      <ul class="tabs ">
        <li class="tab col s3"><a class="active grey-text text-darken-2"  href="#schedule">Schedule</a></li>
        <li class="tab col s3"><a class=" grey-text text-darken-2"href="#grade">Grades</a></li>
      </ul>
    </div>
             <div id="schedule" class="col s12">
                
                  <div class="card">

                     <table class="striped centered">
                       <thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr></thead>
                       <tbody>
                       <tr><td>No classes</td><td><a href="course.html" class="collection-item"><div class="grey-text text-darken-3">OO Analysis & Design</div></a></td><td>No classes</td><td>Computer Storage</td><td>No classes </td></tr>
                       <tr><td></td><td>Data Mining</td><td></td><td></td><td></td></tr>

                       </tbody> 
                     </table>

                  </div>
    
             </div>
             
    <div id="grade" class="col s12">Test 2</div>

  </div>
  
            



</div>
<script>

$(".dropdown-button").dropdown();

</script>


</main>




<!--<footer class="page-footer" style="background-color: darkgray; opacity:0.6;z-index: 90" >-->
<footer class="page-footer" style="background-color: darkgray; opacity:0.6;z-index: 90;margin-top:0px;" >
	<div class="footer-copyright">
		<div class="container"><center>
			OO team project, Yen-Teh, Bader, Catherine
		</center>
		</div>
	</div>
</footer>

</body>


</html>

