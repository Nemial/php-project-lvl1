<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

const LAP = 3;

function runGame($description, callable $getAnswerAndQuestion)
{
    line("Welcome to the Brain Games!");
    line($description . PHP_EOL);
    $name = prompt("May I have your name?");
    line("Hello, {$name}" . PHP_EOL);

    for ($i = 1; $i <= LAP; $i += 1) {
        [$correctAnswer, $question] = $getAnswerAndQuestion();
        line("Question: {$question}");
        $answer = prompt("Your answer: ");
        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, {$name}!");
}
