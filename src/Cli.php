<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run($description)
{
    line("Welcome to the Brain Games!");
    line($description . PHP_EOL);
    $name = prompt("May I have your name?");
    line("Hello, {$name}" . PHP_EOL);

    return $name;
}
