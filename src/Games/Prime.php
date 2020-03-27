<?php

namespace BrainGames\Games\Prime;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $num = rand(0, 512);
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getAnswerAndQuestion, $name);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < $num / 2; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
