<html>
    <head>
	<title>
		Results Page
	</title>
    </head>
	<body>
		<h1> Results </h1>
		<?php
		
			$question[0] = 'What is the capital of Slovenia?';
			$question[1] = "What is the capital of Portugal?";
			$question[2] = "What is the capital of Romania?";
			$question[3] = "What is the capital of Poland?";
			$question[4] = "What is the capital of Sweden?";



			
			$answerKey = ['A) Ljublijana', 'D) Lisbon', 'C) Bucharest', 'A) Warsaw', 'B) Stockholm'];	

			$correct = 0;
		
			$i = 0;
			$i_c = 1;

			foreach($_POST as $answer) {
				
				if($answer[$question[$i]] == $answerKey[$i][0]) { 
					$correct++; 
					echo "<div> <h3>Question $i_c:  $question[$i]: Correct</h3></div>";
				}
				else {
					echo "<div> <h3>Question $i_c $question[$i]: Incorrect</h3></div>";
				}
				echo "<div> Your Answer: $answer,<br> Correct Answer: $answerKey[$i]</div>"; 
				$i = $i_c;
				$i_c++;
				
			}
			
			$percent = $correct / 5.0 * 100;
			echo "<div id='results'><br><h2>$correct / 5 correct <br> $percent Percent</h2></div>";
		?>
		
	</body>
			
</html>
