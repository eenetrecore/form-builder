<?php

namespace FormBuilder\FormFactory\Element;
use FormBuilder\FormFactory\Attribute\AttributeInterface;

/**
 * Interface ElementInterface
 * Element should be the representation of the html DOM element
 * @package FormBuilder\FormFactory\Element
 */
interface ElementInterface
{
    /**
     * Returns html of the element
     * @return string
     */
    public function __toString(): string;

    /**
     * Returns an array of attributes assigned to the elemnt
     * @return array FormBuilder\FormFactory\Attribute\Attribute
     */
    public function attr(): array;

    /**
     * Sets an attribute to the element or updates it if it is already assigned
     * @param AttributeInterface $attribute
     * @return void
     */
    public function setAttribute(AttributeInterface $attribute): void;

    /**
     * Assigns attributes to the element
     * @param AttributeInterface[] $attribute
     * @return void
     */
    public function setAttributes(array $attributes): void;

    /**
     * Removes an attribute from Element
     * @param AttributeInterface $attribute
     * @return bool
     */
    public function removeAttribute(AttributeInterface $attribute): bool;
    /**
     * Asigns a parent element to the element
     * @param ElementInterface|null $parent
     * @return ElementInterface
     */
    public function parent(ElementInterface $parent=null): ElementInterface;

    /**
     * Set Elements ID tag
     * @param string|null $id
     * @return string
     */
    public function setId(string $id=null): string;

    /**
     * Sets the name of the element
     * @param string $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * Return the name of the element
     * @return string
     */
    public function getName(): string;
}