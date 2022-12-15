<?php

use Psr\Log\LogLevel;

class LoggerService implements Psr\Log\LoggerInterface
{
    private $folder = '';

    public function makeFolder($path = '') {
        if($path == '') {
            return false;
        }

        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
    }

    public function setPatch($path) {
        self::makeFolder($path);

        $this->folder = $path;
    }

    /**
     * @inheritDoc
     */
    public function emergency(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::EMERGENCY . ': ' . var_export($context, true) . "\n" . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function alert(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::ALERT . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function critical(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::CRITICAL . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function error(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::ERROR . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function warning(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::WARNING . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function notice(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::NOTICE . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function info(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::INFO . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function debug(array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d H:i:s') . ' ' . LogLevel::DEBUG . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array())
    {
        file_put_contents($this->folder . 'log'.date('Y:m:d').'.txt', date('Y:m:d') . ' ' . $level . ': ' . $message . ': ' . var_export($context, true) . "\n", FILE_APPEND);
    }
}
