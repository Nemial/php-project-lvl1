<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

const LAP = 3;

function engine($description, callable $getAnswerAndQuestion, $name)
{
    for ($i = 1; $i <= LAP; $i += 1) {
        [$question, $correctAnswer] = $getAnswerAndQuestion();
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
