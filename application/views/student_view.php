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

  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="<?php echo base_url();?>" class="brand-logo">MyQuiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?php echo 'Welcome '; echo $student_username; echo'!';?></a></li>
      </ul>
  </nav>


</header>

<main>
  <div class="row">
    <form method="post">
      <div class="col s12">
        <label>Select semester</label>
        <select name="semesterOption" class="browser-default" id="semesterOption" onchange="changeFunc();">
          <option value="" selected="selected">Choose your option</option>
          <option value="Spring 2016" >Spring 2016</option>
          <option value="Summer 2016">Summer 2016</option>
          <option value="Fall 2016">Fall 2016</option>
        </select>
      </div>
      <button class="btn waves-effect waves-light grey darken-3 right" type="submit" name="action">Go
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>

  <div class="row">
    <div class="col s12">
      <?php
      if(isset($_POST['semesterOption'])){

      foreach($courses as $c) {
            if($_POST['semesterOption'] == $c->semester){
        ?>

      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $c->courseName;?></div>
          <?php
            $cid = $c->courseID;
            foreach($courseQuiz[$cid] as $key => $quiz){
          ?>
            <div class="collapsible-body">
              <ul class="collection">
                 <li class="collection-item avatar">
                    <i class="material-icons">mode_edit</i><span class="title">Quiz <?php echo ++$key ?>: <?php echo $quiz->quizName?></span>
                        <p>Duration: <?php echo $quiz->Duration;?> minutes<br>
                        </p>

                        <a href="<?php echo base_url()?>index.php/quiz/attemptQuiz/<?php echo $quiz->quizID;?>/quizName/<?php echo $quiz->quizName;?>/courseName/<?php echo $c->courseName;?>/studentName/<?php echo $student_username;?>" class="secondary-content"><i class="material-icons">send</i></a>
                 </li>
              </ul>
            </div>
          <?php }?>
        </li>
      </ul>
      <?php } } } ?>
    </div>
  </div>



      <!-- <ul class="tabs ">
        <li class="tab col s3"><a class="active grey-text text-darken-2"  href="#schedule">Schedule</a></li>
        <li class="tab col s3"><a class=" grey-text text-darken-2"href="#grade">Grades</a></li>
      </ul>
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
   -->


<script>
  $(".dropdown-button").dropdown();

  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
</script>
<script>
  function changeFunc() {
    var e = document.getElementById('semesterOption');
    var semesterChoice = e.options[e.selectedIndex].text;
    Materialize.toast(semesterChoice,'1000');
  }
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
