<?php
abstract class Dumper
{
    public string $name;

    abstract public function dump(array $data);

    protected function write(): void
    {
        echo 'Writing...';
    }
}