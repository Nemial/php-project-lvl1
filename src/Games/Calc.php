<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'What is the result of the expression?';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $operations = ['*', '+', '-'];
        $firstOperand = rand(0, 256);
        $secondOperand = rand(0, 256);
        $operation = $operations[array_rand($operations)];
        $question = "{$firstOperand} {$operation} {$secondOperand}";
        $correctAnswer = (string) expressionResult($firstOperand, $secondOperand, $operation);

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getAnswerAndQuestion, $name);
}

function expressionResult($firstOperand, $secondOperand, $operation)
{
    switch ($operation) {
        case '+':
            return $firstOperand + $secondOperand;
        case '-':
            return $firstOperand - $secondOperand;
        case '*':
            return $firstOperand * $secondOperand;
    }
}
