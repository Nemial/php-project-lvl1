<?php

namespace BrainGames\Games\GCD;

use function BrainGames\GameEngine\runGame;

const GAME_NAME = "Brain GCD";
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function start()
{
    $getAnswerAndQuestion = function () {
        $firstNum = rand(0, 256);
        $secondNum = rand(0, 128);
        $question = "{$firstNum} {$secondNum}";
        $correctAnswer = (string)findGCD($firstNum, $secondNum);

        return [$correctAnswer, $question];
    };

    runGame(GAME_NAME, DESCRIPTION, $getAnswerAndQuestion);
}

function findGCD($firstNum, $secondNum)
{
    return $firstNum % $secondNum ? findGCD(
        $secondNum,
        $firstNum % $secondNum
    ) : $secondNum;
}
