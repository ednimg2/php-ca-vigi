<?php

class File
{
    private string $filePath;
    private $handle;

    public function __construct(string $filePath, string $mode)
    {
        $this->filePath = $filePath;
        $this->handle = fopen($filePath, $mode);
    }

    public function read(): string
    {
        return fread($this->handle, filesize($this->filePath));
    }

    public function write(string $text): void
    {
        fwrite($this->handle, $text . PHP_EOL);
        rewind($this->handle);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}