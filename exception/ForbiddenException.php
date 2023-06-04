<?php

namespace tr4shcoookieees\MVC\exception;

/**
 * Class ForbiddenException
 *
 * @package tr4shcoookieees\MVC\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}