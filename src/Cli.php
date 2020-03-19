<?php

namespace BrainGames\Cli;

use BrainGames\Even;
use BrainGames\Calc;
use BrainGames\GCD;

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line("What game do you want to play, {$name}?" . PHP_EOL);
    line("Brain Even - 1" . PHP_EOL . "Brain Calc - 2" . PHP_EOL . "Brain GCD - 3" . PHP_EOL);
    $games = prompt("Type Game Number: ");
    switch ($games) {
        case '1':
            Even\start($name);
            break;
        case '2':
            Calc\start($name);
            break;
        case '3':
            GCD\start($name);
            break;
        default:
            return 0;
    }
}

function shortRun($description, $game)
{
    line("Welcome to the Brain Games!");
    line($description . PHP_EOL);
    $name = prompt("May I have your name?");
    line("Hello, {$name}" . PHP_EOL);
    switch ($game) {
        case '1':
            Even\start($name, false);
            break;
        case '2':
            Calc\start($name, false);
            break;
        case '3':
            GCD\start($name, false);
            break;
        default:
            return 0;
    }
}
