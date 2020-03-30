<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\runGame;

const DESCRIPTION = 'What is the result of the expression?';

function start()
{
    $getAnswerAndQuestion = function () {
        $operations = ['*', '+', '-'];
        $firstOperand = rand(0, 256);
        $secondOperand = rand(0, 256);
        $operation = $operations[array_rand($operations)];
        $question = "{$firstOperand} {$operation} {$secondOperand}";
        $correctAnswer = (string) getExpressionResult($firstOperand, $secondOperand, $operation);

        return [$correctAnswer, $question];
    };

    runGame(DESCRIPTION, $getAnswerAndQuestion);
}

function getExpressionResult($firstOperand, $secondOperand, $operation)
{
    switch ($operation) {
        case '+':
            return $firstOperand + $secondOperand;
        case '-':
            return $firstOperand - $secondOperand;
        case '*':
            return $firstOperand * $secondOperand;
        default:
            break;
    }
}
