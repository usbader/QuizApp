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

<main>  
  <script>
    $(document).ready(function() {
      $('select').material_select();
    });
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
    });
 //    document.getElementById('answer1').onclick = function(){
 //     if(document.getElementById('answer1').checked) {
 //       //call your function here
 //       document.getElementById('option1').disabled = false
 //       document.getElementById('option2').disabled = false
 //       document.getElementById('option3').disabled = true
 //       document.getElementById('option4').disabled = true
 //       document.getElementById('option5').disabled = true
 //     }
 //    };
 // document.getElementById('answer2').onclick = function(){
 //  if(document.getElementById('answer2').checked) {
 //        //call your function here
 //        document.getElementById('option1').disabled = false
 //        document.getElementById('option2').disabled = false
 //        document.getElementById('option3').disabled = false
 //        document.getElementById('option4').disabled = false
 //        document.getElementById('option5').disabled = false


 //  }
 //  };
  </script>   

  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="<?php echo base_url();?>">MyQuiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url();?>index.php/teacher/viewcourse">return</a></li>
        <li><a class="modal-trigger" href="#modal1" onclick="serieName=this.dataset.serieName;document.querySelector('#modal1 input#name').value = serieName;return true;" data-serie-name="<?=$quizID ?>">Add Question</a></li>
      </ul>
  </nav>

  <div class="row">
    <form class="col s12">
      <?php
      foreach($questions as $q) {
      ?>
        <div class="row"><?php echo $q->questionStatement?></div>
        <?php 
          if ($q->questionType==0){
        ?>
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>True and Flase</option>
            <option value="1"><?php echo $q->option1 ?></option>
            <option value="2"><?php echo $q->option2 ?></option>
          </select>
          <label>Materialize Select</label>
        </div> 
        <?php }else{ ?>
        <div class="input-field col s12">
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
      <?php } ?>
    </form>
  </div>

     <!-- Modal Structure -->
  <div id="modal1" class="modal">
  <?php
  $hidden = array('quizID' => $quizID);
  echo form_open('quiz/addQuestion','', $hidden); ?>
  <div class="modal-content">
    <h4>Add Question</h4>
    <div class="row">
    <div class="row">
      <div class="input-field col s12">
        <input id="statement" name="statement" type="text" class="validate">
        <label for="statement">Question Statement</label>
      </div>
    </div>
    <div class="row">
      <p>
        <label >Choose question type</label><br>
        <input name="group1" type="radio" id="answer1" value="0"/>
        <label for="answer1">T/F</label>
     </p>
     <p>
       <input name="group1" type="radio" id="answer2" value="1"/>
       <label for="answer2">Multiple Choice</label>
    </p>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="key" name="key" type="text" class="validate">
        <label for="key">Key Answer</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="option1" name="option1" type="text" class="validate">
        <label for="option1">Option 1</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="option2" name="option2" type="text" class="validate">
        <label for="option2">Option 2</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="option3" name="option3" type="text" class="validate">
        <label for="option3">Option 3</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="option4" name="option4" type="text" class="validate">
        <label for="option4">Option 4</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="option5" name="option5" type="text" class="validate">
        <label for="option5">Option 5</label>
      </div>
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <input class=" modal-action  waves-effect waves-green btn-flat" name="submitForm" type="submit" value="Add Question" id="question"/>
  </div>
  </form>

</div>

 
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

