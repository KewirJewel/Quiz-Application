<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>
    <link rel="stylesheet" href="quiz application.css">
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            background-color: white;
        }
        
        form {
            background-color: white;
        }

        .result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        button {
                padding: 10px 20px;
                background-color: blue;
                color: black;
                border: 5px ;
                width: 80%;
                
        }
        ul {
                list-style: none;
                padding: 0;
            }

            li {
                margin-bottom: 10px;
                padding: 10px;
                border-radius: 3px;
            }
</style>
</head>

<body>
    <h1>Quiz Application</h1>
    <form action="quizs.php" method="post">
        <?php
            session_start();
            $iter = 0;
            foreach ($_SESSION['questions'] as $index => $question)  {
                $iter += 1;
                echo '<p>' . ($iter) . '. ' . $question['question'] . '</p>';
                echo '<ol>';
                foreach ($question['option'] as $option) {
                    echo '<li><input type="radio" name="question_' . $iter . '" value="' . $option . '">' . $option . '</li>';
                }
                echo '</ol>';
            }
            session_abort();
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>