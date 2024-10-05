<?php

$answers = ['que1'=>'Q1.1','que2'=>'Q2.3', 'que3'=>'Q3.3','que4'=>'Q4.2','que5'=>'Q5.1'];
$score = 0;
$Max_score = 100;
$totalQuestions = 5;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    foreach($answers as $question => $correctAnswer)
    {
        if(isset($_POST[$question]) && $_POST[$question] == $correctAnswer)
        {
            $score = $score + 20;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link href = "resultStyle.css" rel = "stylesheet" type = "text/css">
</head>
<body>
    
</body>
</html>
<?php
echo"<h1> Your Result !!</h1>";
echo "<p> You scored $score out of $Max_score !</p>";
if($score == 100)
{
    echo "<p>Excellent..</p>";
}
elseif($score >= 60)
{
    echo "<p>Good Job ! You Passed The Quiz</p>";
}
else{
    echo "<p>Keep Practicing..You'll Improve </p>";
}
?>

