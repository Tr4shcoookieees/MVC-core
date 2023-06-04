<?php

namespace tr4shcoookieees\MVC\exception;

/**
 * Class NotFoundException
 *
 * @package tr4shcoookieees\MVC\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}