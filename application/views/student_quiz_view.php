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

.boxed
{
  border: 5px solid black ;
  background-color: white;
      color: #505050;
      font-size: 120%;
   padding-left: 20px;
   padding-right: 20px;
   margin-bottom: 20px;
}


</style>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<main>

  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="<?php echo base_url();?>" class="brand-logo">MyQuiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Welcome <?php $studentName = $this->uri->segment(9); $studentName = urldecode($studentName); echo $studentName;?>!</a></li>
        <li><a href="<?php echo base_url();?>index.php/student/viewcourse"><i class="material-icons">reply</i></a></li>
      </ul>
  </nav>

<div class="container">
  <div class="row">

    <h3><?php
     $courseName = $this->uri->segment(7);
     $courseName = urldecode($courseName);
     echo $courseName;
     ?>
    </h3>
  </div>
  <div class="row">

         <h5> Quiz <?php $quizID = $this->uri->segment(3);echo $quizID?>: <?php $quizName = $this->uri->segment(5);$quizName = urldecode($quizName); echo $quizName?></h3>

  </div>
  <div class="row">
    <form class="col s12">
      <?php
      foreach($questions as $key=>$q) {
      ?>
      <div class="boxed">
        <div class="row">Q<?php echo ++$key ?>: <?php echo $q->questionStatement ?></div>
        <?php
          if ($q->questionType==0){
        ?>
        <div class="row">
          <select>
            <option value="" disabled selected>True and False</option>
            <option value="1"><?php echo $q->option1 ?></option>
            <option value="2"><?php echo $q->option2 ?></option>
          </select>
          <label>Materialize Select</label>
        </div>
        <?php }else{ ?>
        <div class="row">
          <select>
            <option value="" disabled selected>Multiple Choice</option>
            <option value="1"><?php echo $q->option1 ?></option>
            <option value="2"><?php echo $q->option2 ?></option>
            <option value="3"><?php echo $q->option3 ?></option>
            <option value="4"><?php echo $q->option4 ?></option>
            <option value="5"><?php echo $q->option5 ?></option>
          </select>
          <label>Materialize Select</label>
        </div>
        <?php } ?>
      </div>
      <?php } ?>
    </form>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
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
