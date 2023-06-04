<?php

namespace tr4shcoookieees\MVC\middlewares;

use tr4shcoookieees\MVC\Application;
use tr4shcoookieees\MVC\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @package tr4shcoookieees\MVC\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}