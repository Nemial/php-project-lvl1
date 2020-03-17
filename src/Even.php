<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const LAP = 3;

function run($name)
{
    for ($i = 1; $i <= LAP; $i += 1) {
        $randomNum = rand(0, 500);
        line("Question: {$randomNum}");
        $answer = prompt("Your answer: ");
        $correctAnswer = isEven($randomNum) ? 'yes' : 'no';

        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return 0;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, {$name}!");
}

function isEven($num)
{
    return $num % 2 === 0;
}
