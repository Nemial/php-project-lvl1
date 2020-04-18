<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\runGame;

const GAME_NAME = "Brain Even";
const DESCRIPTION = '"Answer "yes" if the number is even, otherwise answer "no"."';

function start()
{
    $getAnswerAndQuestion = function () {
        $question = rand(0, 512);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    runGame(GAME_NAME, DESCRIPTION, $getAnswerAndQuestion);
}

function isEven($num)
{
    return $num % 2 === 0;
}
