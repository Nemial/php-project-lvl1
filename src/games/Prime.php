<?php

namespace BrainGames\Prime;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const GAME_NAME = 'Brain Prime';

function start($name, $needWelcome = true)
{
    $getAnswerAndQuestion = function () {
        $num = 157;
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, GAME_NAME, $getAnswerAndQuestion, $name, $needWelcome);
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
