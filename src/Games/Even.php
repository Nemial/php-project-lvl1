<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = '"Answer "yes" if the number is even, otherwise answer "no"."';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $question = rand(0, 512);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, GAME_NAME, $getAnswerAndQuestion, $name, $needWelcome);
}

function isEven($num)
{
    return $num % 2 === 0;
}
