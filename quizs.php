<?php
include "quiz_application.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>

<?php  foreach ($questions as $index =>$question):?>
    <p><?php echo $index+1?>:<?php echo $question['question']?></p>
    <p style="color: <?php echo $question['correct_answer'] === $answer[$index] ?  'green':'red' ?>" ><?php echo $answer[$index]; ?></p>
    <?php endforeach?>

    <?php

if(!isset($_SESSION['questions'])){
    $_SESSION['questions']= $questions;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer= array_values($_POST);
    //var_dump($answer);
    //$correctAnswers = ;
    $totalQuestions = count($questions);
    $iter = 0;
    foreach ($questions as $question) {
        $iter += 1;
        if (isset($_POST['question_' . $iter]) && $_POST['question_' . $iter] == $question['answer'] && $_POST['question_' . $iter] == $question['correct_answer'] ) {
            $correctAnswers++;
        }
    }
    $score=0;
    foreach($questions as $index =>$questions){
        if(in_array($questions['correct_answer'], $answer))
        $score++;
    }
    $scores = ($score / $totalQuestions) * 100;

   
 echo '<div class="result">You scored ' . $scores .' %></div>';
}
?>



           
            

</body>
</html> 