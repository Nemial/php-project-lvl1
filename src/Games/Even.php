<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\runGame;

const DESCRIPTION = '"Answer "yes" if the number is even, otherwise answer "no"."';

function start()
{
    $getAnswerAndQuestion = function () {
        $question = rand(0, 512);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    runGame(DESCRIPTION, $getAnswerAndQuestion);
}

function isEven($num)
{
    return $num % 2 === 0;
}
