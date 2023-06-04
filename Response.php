<?php

namespace tr4shcoookieees\MVC;

/**
 *  Class Response
 *
 * @package tr4shcoookieees\MVC
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}