<?php

namespace BrainGames\Cli;

use BrainGames\Even;
use BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line("What game do you want to play, {$name}?" . PHP_EOL);
    line("Brain Even - 1" . PHP_EOL . "Brain Calc - 2" . PHP_EOL);
    $games = prompt("Type Game Number: ");
    switch ($games) {
        case '1':
            Even\start($name);
            break;
        case '2':
            Calc\start($name);
            break;
        default:
            return 0;
    }
}
