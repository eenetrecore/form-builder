<?php

namespace FormBuilder\FormFactory\Attribute;

/**
 * Interface AttributeInterface Describes methods required for attributes with values
 * @package FormBuilder\FormFactory\Attribute
 */
interface AttributeInterface extends AttributeBaseInterface
{
    /**
     * Sets a value for an Attribute
     * @param mixed $value
     * @return void
     */
    public function setValue($value);

    /**
     * Returns the attribute value
     * @return mixed
     */
    public function getValue();

}