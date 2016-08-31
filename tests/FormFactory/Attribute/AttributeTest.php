<?php

namespace FormBuilder\FormFactory\Attribute;

/**
 * @coversDefaultClass FormBuilder/FormFactory/Attribute/Attribute
 */
class AttributeTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * @conver ::__construct
     * @conver ::__toString
     */
    public function testConstruct() {
        $attribute = new Attribute('newKind');
        $this->assertEquals('newKind',$attribute,'Constructor Not Working');
    }

    /**
     * @conver ::__construct
     * @conver ::setValue
     * @conver ::getValue
     */
    public function testGetValue() {
        $attribute = new Attribute('newKind');
        $attribute->setValue('40');
        $this->assertEquals(40,$attribute->getValue(),'Constructor Not Working');
    }

    /**
     * @conver ::__construct
     * @conver ::__toString
     * @conver ::setValue
     * @conver ::getValue
     */
    public function testToString() {
        $attribute = new Attribute('newKind');
        $attribute->setValue('40');
        $this->assertEquals('newKind="40"',$attribute,'Constructor Not Working');
    }
}