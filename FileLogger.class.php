<?php

namespace File;

class Logger
{

    public function logToFile($message)
    {
        echo "in file: " . $message . PHP_EOL;
    }
}