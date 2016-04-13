<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Simple Login with CodeIgniter</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <style>
    html {
      background-color: papayawhip;
    }
  </style>

  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
          
    <!-- write both student and teacher login in the same page,
     each trigger different different controller 'teacher/login'
     and 'student/login' and redirect to student/index and teacher/index page
     session the 'ID'-->
    <nav>
      <div class="nav-wrapper grey darken-3 ">
        <a href="#" class="QuizApp">QuizApp</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="modal-trigger"href="#user">login</a></li>
          </ul>
      </div>
    </nav>
    <!-- show the login error -->
    <h4><?php echo validation_errors(); ?></h4>
    <h4><?php echo $message; ?></h4>

    <div id="slide" class="slider" style="z-index: 100 ">
      <ul class="slides">
        <li>
          <img src="https://localhost/codeIgniter/images/slide1.jpg">
          <div id="slide1" class="caption center-align">
            <h3>Welcome to My Quiz!</h3>
            <h5 class="light grey-text text-lighten-3">This is a realy convient app for both student and teacher.</h5>
          </div>
        </li>
        <li>
          <img src="https://localhost/codeIgniter/images/slide3.jpg">
          <div id="slide2" class="caption left-align">
            <h3>Welcome to My Quiz!</h3>
            <h5 class="light grey-text text-lighten-3">For Student, you can easily take test online without attending school!</h5>
          </div>
        </li>
        <li>
          <img src="https://localhost/codeIgniter/images/slide2.jpg">
          <div id="slide3" class="caption right-align">
            <h3>Welcome to My Quiz!</h3>
            <h5 class="light grey-text text-lighten-3">For Teacher,you can easily give a quiz online.</h5>
          </div>
        </li>
      </ul>
    </div>
    <div class="container">
      <div class="section">

      <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m6">
            <div class="icon-block">
              <h5 class="center">About</h5>
              <p class="light">
              Get rid of your traditional quizing environment, let us provide you a more convinent quizing environment. Try our MyQuiz app, convinent, fast, brilliant.
              </p>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="icon-block">
              <h5 class="center">How it works</h5>
              <p class="light">
              We offer a pretty easy-using quiz app for teahers who are tired of the traditional testing method. Save your time on gathering the tests, grading the tests, answering students questions. With MyQuiz, all these things can be done online.
              </p>
            </div>
          </div>
        </div>
     </div>
    </div>
    <!--login modal-->
    <div id="user" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Login</h4>
        <?php echo form_open('user/login'); ?>
         <select name="type">
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select>
          </br>
          <label for="username">Username:</label>
          <input type="text" size="20" id="username" name="username"/>
          <br/>
          <label for="password">Password:</label>
          <input type="password" size="20" id="passowrd" name="password"/>
          <input type="submit" value="Login"/>
        </form>
      </div>
    </div>
    <!--  -->
    <footer class="page-footer" style="background-color: darkgray; opacity:0.6;z-index: 90;margin-top:0px;" >
      <div class="footer-copyright">
        <div class="container"><center>
          OO team project, Yen-Teh, Bader, Catherine
        </div>
      </div>
    </footer>

    <script>
    $(document).ready(function() {
    $('select').material_select();
  });
    $(document).ready(function(){
      $('.slider').slider({
        indicators: false,
        height: 527,
        interval: 3000});
    });
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      }); 
    </script> 
  </body>
</html>
