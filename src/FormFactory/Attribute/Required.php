<?php

namespace FormBuilder\FormFactory\Attribute;

/**
 * Class Required
 * Implements Required Attribute for the FormBuilder\FormFactory\Element\Input
 * @package FormBuilder\FormFactory\BaseAttribute
 *
 */
class Required extends Attribute
{
    public function __construct()
    {
        parent::__construct('required');
    }
}