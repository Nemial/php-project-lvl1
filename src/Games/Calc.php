<?php

namespace BrainGames\Games\Calc;

use Error;

use function BrainGames\GameEngine\runGame;

const GAME_NAME = "Brain Calc";
const DESCRIPTION = 'What is the result of the expression?';

function start(): void
{
    $getAnswerAndQuestion = function () {
        $operations = ['*', '+', '-'];
        $firstOperand = rand(0, 256);
        $secondOperand = rand(0, 256);
        $operation = $operations[array_rand($operations)];
        $question = "$firstOperand $operation $secondOperand";
        $correctAnswer = (string)getExpressionResult($firstOperand, $secondOperand, $operation);

        return [$correctAnswer, $question];
    };

    runGame(GAME_NAME, DESCRIPTION, $getAnswerAndQuestion);
}

function getExpressionResult(int $firstOperand, int $secondOperand, string $operation): int
{
    return match ($operation) {
        '+' => $firstOperand + $secondOperand,
        '-' => $firstOperand - $secondOperand,
        '*' => $firstOperand * $secondOperand,
        default => throw new Error('Unknown operation: ' . $operation),
    };
}
