<?php

namespace FormBuilder\FormFactory\Attribute;


/**
 * Interface AttributeInterface Basic definition for the Attribute Classes
 */
interface AttributeBaseInterface
{
    /**
     * Returns stringified version of the attribute ready to be applied on the element
     * @return string
     */
    public function __toString();
}