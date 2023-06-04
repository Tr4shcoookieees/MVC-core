<?php

namespace tr4shcoookieees\MVC\form;

use tr4shcoookieees\MVC\Model;

/**
 * Class Form
 *
 * @package tr4shcoookieees\MVC\form
 */
class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}