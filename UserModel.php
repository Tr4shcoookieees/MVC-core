<?php

namespace tr4shcoookieees\MVC;

use tr4shcoookieees\MVC\db\DbModel;

/**
 * Class UserModel
 *
 * @package tr4shcoookieees\MVC
 */
abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}