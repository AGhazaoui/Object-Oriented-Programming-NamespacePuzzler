<?php

/*  ONLY EDIT CODE BELOW
    ONLY EDIT CODE ABOVE */
require "FileLogger.class.php";
require "ConsoleLogger.class.php";
require "UI.helpers.php";

use Console\Logger as Logger;
use File\Logger as FileLogger;
use UI;

$logger = new Logger();
$fileLogger = new FileLogger();


$message = getInputFromUser();

$logger->log($message);
$fileLogger->logToFile($message);
