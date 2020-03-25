<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'What number is missing in the progression?';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $progression = generateProgression();
        $hiddenItemIndex = array_rand($progression);
        $correctAnswer = (string) $progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = "..";
        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, GAME_NAME, $getAnswerAndQuestion, $name);
}

function generateProgression()
{
    $startNum = rand(0, 512);
    $step = rand(1, 4);
    $lengtProgression = 10;
    $progression = [];

    for ($i = 0; $i < $lengtProgression; $i += 1) {
        $progression[$i] = $startNum + $step * $i;
    }

    return $progression;
}
