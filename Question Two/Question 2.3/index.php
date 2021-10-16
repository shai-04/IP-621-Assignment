<!DOCTYPE html>

<html lang = "en-za">
	<head>
		<meta charset = "UTF-8">
		<title>Question 2.3:</title>

		<link rel = "stylesheet" type = "text/CSS" href = "style.css">
	</head>

	<body>
		<table>
			<caption>Table showing results of students:</caption>

			<tr>
				<th>Name:</th>
				<th colspan = "2">Marks:</th>
				<th>Decision:</th>
			</tr>

			<?php
				require("grades.php");
			?>
		</table>
	</body>
</html>