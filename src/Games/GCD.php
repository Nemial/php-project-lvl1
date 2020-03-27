<?php

namespace BrainGames\Games\GCD;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $firstNum = rand(0, 256);
        $secondNum = rand(0, 256);
        $question = "{$firstNum} {$secondNum}";
        $correctAnswer = (string) findGCD($firstNum, $secondNum);

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getAnswerAndQuestion, $name);
}

function findGCD($firstNum, $secondNum)
{
    $startNum = 1;
    $minNum = $firstNum < $secondNum ? $firstNum : $secondNum;
    $listDivisors = [];

    for ($i = 0; $i <= $minNum; $i += 1) {
        $divisor = $startNum + $i;
        $firstResult = $firstNum % $divisor;
        $secondResult = $secondNum % $divisor;
        if ($firstResult === 0 && $secondResult === 0) {
            $listDivisors[] = $divisor;
        }
    }

    return max($listDivisors);
}
