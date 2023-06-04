<?php

namespace tr4shcoookieees\MVC\form;

use tr4shcoookieees\MVC\Model;

/**
 * Class BaseField
 *
 * @package tr4shcoookieees\MVC\form
 */
abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf('
            <div class="mb-3">
              <label>%s</label>
                %s
              <div class="invalid-feedback">
                %s
              </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}