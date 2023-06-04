<?php

namespace tr4shcoookieees\MVC;

use tr4shcoookieees\MVC\db\UserModel;

/**
 * Class UserModel
 *
 * @package tr4shcoookieees\MVC
 */
abstract class UserModel extends UserModel
{
    abstract public function getDisplayName(): string;
}