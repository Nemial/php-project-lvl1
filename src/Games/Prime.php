<?php

namespace BrainGames\Games\Prime;

use function BrainGames\GameEngine\runGame;

const GAME_NAME = "Brain Prime";
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function start(): void
{
    $getAnswerAndQuestion = function () {
        $num = rand(0, 512);
        $question = "$num";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    runGame(GAME_NAME, DESCRIPTION, $getAnswerAndQuestion);
}

function isPrime($num): bool
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
