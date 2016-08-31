<?php

namespace FormBuilder\FormFactory\Element;

/**
 * Description of a input Element
 * Interface InputInterface
 * @package FormBuilder\FormFactory\Element
 */
interface InputInterface extends ElementInterface
{
    /**
     * Sets the value of an element
     * @param string $value
     * @return void
     */
    public function setValue(string $value);

    /**
     * Gets the value of an element
     * @return string
     */
    public function getValue(): string;
}