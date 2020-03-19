<?php

namespace BrainGames\Even;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = '"Answer "yes" if the number is even, otherwise answer "no"."';
const GAME_NAME = 'Brain Even';

function start($name, $needWelcome = true)
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
