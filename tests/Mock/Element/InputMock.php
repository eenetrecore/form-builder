<?php

namespace FormBuilder\FormFactory\Element;


use FormBuilder\FormFactory\Attribute\AttributeInterface;

class InputMock implements InputInterface
{
    private $attributes;

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }

    /**
     * @inheritDoc
     */
    public function attr(): array
    {
        // TODO: Implement attr() method.
    }

    /**
     * @inheritDoc
     */
    public function setAttribute(AttributeInterface $attribute): void
    {
        // TODO: Implement setAttribute() method.
    }

    /**
     * @inheritDoc
     */
    public function setAttributes(array $attributes): void
    {
        // TODO: Implement setAttributes() method.
    }

    /**
     * @inheritDoc
     */
    public function removeAttribute(AttributeInterface $attribute): bool
    {
        // TODO: Implement removeAttribute() method.
    }

    /**
     * @inheritDoc
     */
    public function parent(ElementInterface $parent=null): ElementInterface
    {

    }

    /**
     * @inheritDoc
     */
    public function setId(string $id = null): string
    {
        return 'firstName';
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): void
    {

    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'form[firstName]';
    }

    /**
     * @inheritDoc
     */
    public function setValue(string $value)
    {

    }

    /**
     * @inheritDoc
     */
    public function getValue(): string
    {
        return '20';
    }

}