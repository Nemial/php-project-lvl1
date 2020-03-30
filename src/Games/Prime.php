<?php

namespace BrainGames\Games\Prime;

use function BrainGames\GameEngine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function start()
{
    $getAnswerAndQuestion = function () {
        $num = rand(0, 512);
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    runGame(DESCRIPTION, $getAnswerAndQuestion);
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
