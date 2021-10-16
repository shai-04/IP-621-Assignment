<!DOCTYPE html>

<html lang = "en-za">
	<head>
		<meta charset = "UTF-8">
		<title>Question 2.1:</title>

		<link rel = "stylesheet" type = "text/CSS" href = "style.css">
	</head>

	<body>
		<form action = "index.php" method = "POST">
			<?php
				require("form.php");
			?>
			
			<input type = "submit" name = "submit" value = "Submit Data">
		</form>

		<?php
			require("submit.php");
		?>
	</body>
</html>