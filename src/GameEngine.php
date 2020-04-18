<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

const LAP_COUNT = 3;

function runGame($gameName, $description, callable $getAnswerAndQuestion)
{
    line("Welcome to the {$gameName}!");
    line($description . PHP_EOL);
    $name = prompt("May I have your name?");
    line("Hello, {$name}" . PHP_EOL);

    for ($i = 1; $i <= LAP_COUNT; $i += 1) {
        [$correctAnswer, $question] = $getAnswerAndQuestion();
        line("Question: {$question}");
        $answer = prompt("Your answer: ");
        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
