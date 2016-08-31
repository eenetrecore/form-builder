<?php
/**
 * Created by PhpStorm.
 * User: enes
 * Date: 24/08/2016
 * Time: 15:19
 */

namespace FormBuilder\FormFactory\Attribute;


class Attribute implements AttributeInterface
{
    /**
     * @var string
     */
    private $name;

    private $value;

    /**
     * Attribute constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        if($this->getValue()){
            return $this->name.'="'.$this->getValue().'"';
        }
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    public function getValue()
    {
        return $this->value;
    }

}