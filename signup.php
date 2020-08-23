
<main>
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="uid" placeholder="Username" required autocomplete= off>
		<input type="email" name="mail" placeholder="Email" required autocomplete= off >
		<input type="password" name="pwd" placeholder="password" required>
		<input type="password" name="pwd-repeat" placeholder="Confirm password" required>
		<button type="submit" name="signup-submit">Signup</button>
		

	</form>

</main>
<?php
require "footer.php";
?>






