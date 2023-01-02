<?php

/**
 * FileLogger
 * - __construct()
 * - log()
 *
 *
 * $logger = new FileLogger('log.txt');
 * $logger->log();
 *
 * --- Logging to file. File name is: log.txt
 *
 * method'as log, turi priimti properties $message
 * - log(string $message)
 *
 * --- Logging to file. Message: $message, File name is: log.txt
 *
 * Sukurti nauja klase
 * DatabaseLogger
 * - log(string $message)
 */

class FileLogger implements LoggerInterface
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }
    public function save(): string
    {
        return 'Logging to file. File name is: ' . $this->fileName;
    }
}

class DatabaseLogger implements LoggerInterface
{
    public function save(): string
    {
        return 'Logging to database';
    }
}

class CloudLogger implements LoggerInterface
{
    public function save()
    {
        return 'Logging to Cloud!';
    }
}

class Logger
{
    public function log(LoggerInterface $logger)
    {
        return $logger->save();
    }
}

interface LoggerInterface
{
    public function save();
}

$logger = new Logger();
echo $logger->log(new CloudLogger());