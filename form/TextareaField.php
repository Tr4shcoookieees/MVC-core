<?php

namespace tr4shcoookieees\MVC\form;

/**
 * Class TextareaField
 *
 * @package tr4shcoookieees\MVC\form
 */
class TextareaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf('<textarea name="" class="form-control %s">%s</textarea>',
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        );
    }
}