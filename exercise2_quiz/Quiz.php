<html>
    <head>
	<title>
		Results Page
	</title>
    </head>
	<body>
		<h1> Results </h1>
		<?php
			$question1 = 'question-1-answers';

			$answer1 = $_POST['question-1-answers'];
			$answer2 = $_POST['question-2-answers'];
			$answer3 = $_POST['question-3-answers'];
				
			$totalCorrect = 0;
			
			if($answer1 == "A") { $totalCorrect++; }
			if($answer2 == "B") { $totalCorrect++; }
			if($answer3 == "A") { $totalCorrect++; }


			echo "<div id='results'>$totalCorrect / 5 correct</div>";
		?>
		<h3> 1. The word which means "house" is: </h3>
			<h4> Correct Answer: A) Maison </h4>
			<h4> Your Answer: </ħ4>
	</body>
			
</html>
