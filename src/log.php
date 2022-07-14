<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class log
{
    private Logger $logger;
    private string $log_file;

    public function __construct($log_file)
    {
        $this->log_file = $log_file;
        $this->logger = new Logger('log');
        $this->logger->pushHandler(new StreamHandler($this->log_file, Logger::INFO));
    }

    function log_info($message)
    {
        $this->logger->info($message);
    }

    function print_log()
    {
        return file_get_contents($this->log_file);
    }

}
