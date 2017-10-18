<?php
include 'header.php';
?>
<div class="Form">
		<h1>Comments</h1>
		<h2>Please fill the form to post your comment!</h2>
		<form id="commentForm" action="contact.php" method="POST">
			<fieldset>
				<div class="forms">
					<label for="firstName">
						<!-- ///minlegth attribute requires a minimun length  -->
						<input id="firstName" name="name" minlength="2" placeholder="First Name" type="text" required />
					</label>
					<label for="lastName">
						 <input id="lastName" name="lname"minlength="2" placeholder="Last Name" type="text" required />
					</label>
					<label for="email">
						<input id="email" name="email" placeholder="Email" type="email" required />
					</label>
					<label for="phone">
						<input id="phone" name="phone" placeholder="(555)555-5555" type="tel" required />
					</label>
					<label for="comment">
					<textarea id="comment" name="comment" placeholder="Enter comments..." required /></textarea>
					</label>
					<input type="submit" name="submit" value="submit">
				</div>
			</fieldset>
		</form>
	</div>
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
