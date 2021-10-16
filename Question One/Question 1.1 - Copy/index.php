<!DOCTYPE html>

<html lang = "en-za">
	<head>
		<meta charset = "UTF-8">

		<title>Question 1.1:</title>

		<link rel = "stylesheet" type = "text/CSS" href = "style.css">
	</head>

	<body>
		<section id = "board">
			<h1>Chess Board</h1>
			<table>
				<?php
					require("chess.php");  
				?>
			</table>
		</section>

		<div class = "container">
			<div class = "item">
				<h1>What is Chess?</h1>
				<p>
				It is a board game of strategic skill for two players
				, played on a chequered board on which each playing 
				piece is moved according to precise rules. The 
				object is to put the opponent's king under a direct 
				attack from which escape is impossible. When this 
				occurs, it is known as a <i>checkmate</i>.
				</p>
			</div>

			<div class = "item">
				<h1>Pieces in Chess</h1>
				<ul>
					<li>
						<b>King</b>: Crucial piece, moves one square
						 in any direction.
					</li>
					<li>
						<b>Queen</b>: Most powerful piece, can move 
						any amount of squares in any direction.
					</li>
					<li>
						<b>Rook</b>: Worth 4-6 pawns, can only move 
						straight any amount of squares.
					</li>
					<li>
						<b>Bishop</b>: Worth 3 pawns, can move any 
						amount of squares diagonally.
					</li>
					<li>
						<b>Knight</b>: Worth 3 pawns, moves 4 
						squares in an L shape.
					</li>
					<li>
						<b>Pawn</b>: Moves 2 squares forward on 
						first move and one square thereafter.
					</li>
				</ul>
			</div>

			<div class = "item">
				<h1>How to play Chess?</h1>
				<p>
				It is to be played on a square board, made of 64 
				smaller squares, with eight squares on each side. 
				Each player starts with sixteen pieces: eight 
				pawns, two knights, two bishops, two rooks, one 
				queen and one king. The goal of the game is for 
				each player to try and checkmate the king of the 
				opponent.
				</p>
			</div>
		</div>
	</body>
</html>