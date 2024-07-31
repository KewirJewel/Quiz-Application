<?php
// Quiz questions and answers
session_start();
$questions = array(
    array(
        'question' => 'What is the capital of France?',
        'option' => array('Paris', 'London', 'Berlin', 'Madrid'),
        'correct_answer' => 'Paris',
        'answer' => 0
    ),
    array(
        'question' => 'Which is the largest planet in our solar system?',
        'option' => array('Earth', 'Jupiter', 'Saturn', 'Neptune'),
        'correct_answer' => 'Jupiter',
        'answer' => 1
    ),
    array(
        'question'=> 'which is the largest river in the world?',
        'option' => array('Mississipi', 'Amazon', 'Nile', 'Orange'),
        'correct_answer' => 'Amazon',
        'answer'=> 2
    ),
    array(
        'question' => 'What is the name of the tallest mountain in Africa',
        'option' => array('Kilimanjaro', 'Everest', 'Himalayas', 'Sinai'),
        'correct_answer' => 'Kilimanjaro',
        'answer' => 3
    ),
    array(
        'question' => 'Which is the fastest animal at flight',
        'option' => array('Cheetah', 'Eagle', 'Owl', 'Falcon'),
        'correct_answer' => 'Falcon',
        'answer' => 4
    ),
    array(
        'question' => 'Which religion is based in Cameroon',
        'option' => array('Christianity and Islamic', 'Budaism and Islamic', 'Christianity and Hindoism', 'Hindoism and Budaism'),
        'correct_answer' => 'Christianity and Islamic',
        'answer' => 5
    ),
    array(
        'question' => 'Which is the most beautiful planet',
        'option' => array('Mecury', 'Venus', 'Pluto', 'Saturn'),
        'correct_answer' => 'Saturn',
        'answer' => 6
    ),
    array(
        'question' => 'Which of this is not a planet',
        'option' => array('Uranus', 'Xenos', 'pluto', 'Mars'),
        'correct_answer' => 'pluto',
        'answer' => 7
    ),
    array(
        'question' => 'Who is the weakest anime actor character to date',
        'option' => array('Naruto', 'Goku', 'Deku', 'Gon'),
        'correct_answer' => 'Gon',
        'answer' => 8
    ),
    array(
        'question' => 'Who is the funniest/Most Funky Skye8 Leader',
        'option' => array('Mr Godwill', 'Mr Armile', 'Mr Andrew', 'Mr Leonel'),
        'correct_answer' => 'Mr Andrew',
        'answer' => 9
    )
    // Add more questions here
    
);


?>