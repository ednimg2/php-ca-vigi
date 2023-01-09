<?php

class HttpRequest
{
    public static function uri(): string
    {
        return strtolower($_SERVER['REQUEST_URI']);
    }
}

echo HttpRequest::uri();