<?php require('includes/config.php');
//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: memberpage.php'); }
//if form has been submitted process it
if(isset($_POST['submit'])){
	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}
	}
	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}
	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}
	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}
	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}
	}
	//if no errors have been created carry on
	if(!isset($error)){
		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);
		//create the activasion code
		$activasion = md5(uniqid(rand(),true));
		try {
			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');
			//send email
			$to = $_POST['email'];
			$subject = "Registration Confirmation";
			$body = "<p>Thank you for registering at demo site.</p>
			<p>To activate your account, please click on this link: <a href='".DIR."activate.php?x=$id&y=$activasion'>".DIR."activate.php?x=$id&y=$activasion</a></p>
			<p>Regards Site Admin</p>";
			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();
			//redirect to index page
			header('Location: index.php?action=joined');
			exit;
		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}
	}
}
//define page title
$title = 'My Quiz';
//include header template
require('layout/header.php');
?>

<main>


<div class="container">
	<div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m6">
				<div class="icon-block">
					<h2 class="center grey-text"><i class="material-icons">info</i></h2>
					<h5 class="center">About</h5>
					<p class="light">
						Get rid of your traditional quizing environment, let us provide you a more convinent quizing environment. Try our MyQuiz app, convinent, fast, brilliant.
					</p>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="icon-block">
					<h2 class="center grey-text"><i class="material-icons">stars</i></h2>
					<h5 class="center">How it works</h5>
					<p class="light">
						We offer a pretty easy-using quiz app for teahers who are tired of the traditional testing method. Save your time on gathering the tests, grading the tests, answering students questions. With MyQuiz, all these things can be done online.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

</main>

<script>
	$(document).ready(function(){
		$('.slider').slider({
			indicators: false,
			height: 527,
			interval: 3000});
	});
	$(".button-collapse").sideNav();

    $(document).ready(function(){
      $('.parallax').parallax();
    });
    
function login()
{


}

</script>

<?php
//include header template
require('layout/footer.php');
?>

