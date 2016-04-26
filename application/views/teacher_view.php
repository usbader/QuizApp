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
			<li><a href="#">Welcome <?php echo $teacher_username;?>!</a></li>
			<li><a class="waves-effect modal-trigger" href="manageCourses.html">Manage courses</a></li>
 </ul>
	</div>
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
          <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $c->courseName;?>
            <a class="btn-floating btn-small waves-effect waves-light red modal-trigger" href="#modal1" onclick="serieName=this.dataset.serieName;document.querySelector('#modal1 input#name').value = serieName;return true;" data-serie-name="<?= $c->courseID ?>"><i class="material-icons">add</i></a>
          </div>
          <?php
            $cid = $c->courseID;
            foreach($courseQuiz[$cid] as $quiz){
          ?>
            <div class="collapsible-body">
              <a href="<?php echo base_url()?>index.php/quiz/attemptQuiz/<?php echo $quiz->quizID?>"><h5><?php echo $quiz->quizName?></h5></a>
              <p><?php echo $quiz->Duration;?></p>
            </div>
          <?php }?>
        </li>
      </ul>
      <?php } } } ?>
    </div>
  </div>

   <!-- Modal Structure -->
<div id="modal1" class="modal">
  <?php
  $hidden = array('courseID' => $c->courseID);
  echo form_open('teacher/makeQuiz','', $hidden); ?>
  <div class="modal-content">
    <h4>Make Quiz</h4>
    <div class="row">
      <div class="row">
        <div class="input-field col s12">
          <input id="name" name="courseID" type="hidden">
          <input id="quiz_title" name="quiz_title" type="text" class="validate">
          <label for="quiz_title">Quiz Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="duration" name="duration" type="text" class="validate">
          <label for="duration">Duration(in minutes)</label>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <input class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit" value="Submit Quiz"/>
  </div>
  </form>
</div>


    </div>





</div>


<script>

$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
});

$(".dropdown-button").dropdown();

$(document).ready(function(){
   $('.collapsible').collapsible({
     accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
   });
 });

 document.getElementById('answer1').onclick = function(){
     if(document.getElementById('answer1').checked) {
       //call your function here
       document.getElementById('option1').disabled = false
       document.getElementById('option2').disabled = false
       document.getElementById('option3').disabled = true
       document.getElementById('option4').disabled = true
       document.getElementById('option5').disabled = true
     }
 };
 document.getElementById('answer2').onclick = function(){
  if(document.getElementById('answer2').checked) {
        //call your function here
        document.getElementById('option1').disabled = false
        document.getElementById('option2').disabled = false
        document.getElementById('option3').disabled = false
        document.getElementById('option4').disabled = false
        document.getElementById('option5').disabled = false


      }
};
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
