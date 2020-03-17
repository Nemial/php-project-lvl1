<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use BrainGames\Even;

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    line();
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line();
    Even\run($name);
}
