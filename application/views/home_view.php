<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Simple Login with CodeIgniter</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://localhost/CodeIgniter/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://localhost/CodeIgniter/js/materialize.min.js"></script>
          
    <!-- write both student and teacher login in the same page,
     each trigger different different controller 'teacher/login'
     and 'student/login' and redirect to student/index and teacher/index page
     session the 'ID'-->
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="QuizApp">QuizApp</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="modal-trigger"href="#teacher">Teacher login</a></li>
            <li><a class="modal-trigger" href="#student">student Login</a></li>
          </ul>
      </div>
    </nav>
    <h4><?php echo validation_errors(); ?></h4>
    <!--modal-->
    <div id="teacher" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Teacher Login</h4>
        <?php echo form_open('Teacher/login'); ?>
          <label for="username">Username:</label>
          <input type="text" size="20" id="username" name="username"/>
          <br/>
          <label for="password">Password:</label>
          <input type="password" size="20" id="passowrd" name="password"/>
          <input type="submit" value="Login"/>
        </form>
      </div>
    </div>

    <div id="student" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Student Login</h4>
        <?php echo form_open('Student/login'); ?>
          <label for="username">Username:</label>
          <input type="text" size="20" id="username" name="username"/>
          <br/>
          <label for="password">Password:</label>
          <input type="password" size="20" id="passowrd" name="password"/>
          <input type="submit" value="Login"/>
        </form>
      </div>
    </div>
     
    <script>
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      }); 
    </script> 
  </body>
</html>
