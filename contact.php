<?php
include 'header.php';
?>
<div class="Form">
		<h1>Comments</h1>
		<h2>Please fill the form to post your comment!</h2>
		<div class="formContainer">
		<form id="commentForm" action="contact.php" method="POST">
			<fieldset>
				<div class="forms">
					<label for="firstName">First Name:
						<!-- ///minlegth attribute requires a minimun length  -->
						<input id="firstName" name="firstName" minlength="2" placeholder="First Name" type="text" required />
					</label>
					<label for="lastName">Last Name:
						 <input id="lastName" name="lastName"minlength="2" placeholder="Last Name" type="text" required />
					</label>
					<label for="email">E-Mail:
						<input id="email" name="email" placeholder="Email" type="email" required />
					</label>
					<label for="phone">Phone:
						<input id="phone" name="phone" placeholder="(555)555-5555" type="tel" required />
					</label>
					<label for="comments">Comment:
					<textarea id="comments" name="comments" placeholder="Enter comments..." required /></textarea>
					</label>
					<input type="submit" name="submit" value="submit">
				</div>
			</fieldset>
		</form>
		</div>
	</div>
	<?php
	if(isset($_POST['email'])) {

	    // EDIT THE 2 LINES BELOW AS REQUIRED
	    $email_to = "miguelusaf13@gmail.com";
	    $email_subject = "Portfolio Mail";

	    function died($error) {
	        // your error code can go here
	        echo $error;
	        echo "Sorry there was an error";
	        die();
	    }


	    // validation expected data exists
	    if(!isset($_POST['firstName']) ||
	        !isset($_POST['lastName']) ||
	        !isset($_POST['email']) ||
	        !isset($_POST['phone']) ||
	        !isset($_POST['comments'])) {
	        died('Opps, something went wrong.');
	    }



	    $first_name = $_POST['firstName']; // required
	    $last_name = $_POST['lastName']; // required
	    $email_from = $_POST['email']; // required
	    $telephone = $_POST['phone']; // not required
	    $comments = $_POST['comments']; // required

	    $error_message = "";
	    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	  if(!preg_match($email_exp,$email_from)) {
	    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }

	    $string_exp = "/^[A-Za-z .'-]+$/";

	  if(!preg_match($string_exp,$first_name)) {
	    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
	  }

	  if(!preg_match($string_exp,$last_name)) {
	    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	  }

	  if(strlen($comments) < 2) {
	    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
	  }

	  if(strlen($error_message) > 0) {
	    died($error_message);
	  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	?>

	<!-- include your own success html here -->

	<p>Thank you for contacting me. I will be in touch with you very soon.</p>

	<?php

}
	 ?>
	<!-- //form validation jquery -->
	<script
		src="http://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js">
	</script>
	<script>
			$("#commentForm").validate();
	</script>
	<!-- </script> -->
<?php
	include 'footer.php';
?>
