
<html>

<head>
	<title>Quiz</title>
</head>

<body>
	<div id="page-wrap">

		<h1>Result</h1>

        <?php
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
            $answer6 = $_POST['q6'];
            $total = 0;

            if ($answer1 == "Rome"){$total++;}
            if ($answer2 == "New Delhi"){$total++;}
            if ($answer3 == "Buenos Aires"){$total++;}
            if ($answer4 == "Maputo"){$total++;}
            if ($answer5 == "Canberra"){$total++;}
            if ($answer6 == "Mexico City"){$total++;}

            echo "<div id='results'>$total / 6 correct</div>";

            echo "Answers: ";
            echo "<h3>What is the capital of Italy?</h3>";
            echo "Your answer: ";
            echo $answer1;
            echo "<br>";
            echo "Correct answer: ";
            echo "Rome";

						echo "<h3>What is the capital of India?</h3>";
            echo "Your answer: ";
            echo $answer2;
            echo "<br>";
            echo "Correct answer: ";
            echo "New Delhi";

						echo "<h3>What is the capital of Argentina?</h3>";
            echo "Your answer: ";
            echo $answer3;
            echo "<br>";
            echo "Correct answer: ";
            echo "Buenos Aires";

						echo "<h3>What is the capital of Mozambique?</h3>";
            echo "Your answer: ";
            echo $answer4;
            echo "<br>";
            echo "Correct answer: ";
            echo "Maputo";

						echo "<h3>What is the capital of Australia?</h3>";
            echo "Your answer: ";
            echo $answer5;
            echo "<br>";
            echo "Correct answer: ";
            echo "Canberra";

						echo "<h3>What is the capital of Mexico?</h3>";
            echo "Your answer: ";
            echo $answer6;
            echo "<br>";
            echo "Correct answer: ";
            echo "Mexico City";
        ?>

	</div>

</body>

</html>
