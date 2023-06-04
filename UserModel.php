<?php

namespace app\core;

use app\core\db\UserModel;

/**
 * Class UserModel
 *
 * @package app\core
 */
abstract class UserModel extends UserModel
{
    abstract public function getDisplayName(): string;
}