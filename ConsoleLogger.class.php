<?php

namespace Console;

class Logger
{

    public function log($message)
    {
        echo "in console: " . $message . PHP_EOL;
    }
}
