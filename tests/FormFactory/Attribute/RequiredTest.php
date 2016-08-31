<?php

namespace FormBuilder\FormFactory\Attribute;


use FormBuilder\FormFactory\Attribute\{Required,Attribute};
/**
 * @coversDefaultClass FormBuilder/FormFactory/Attribute/Required
 */
class RequiredTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @cover ::__construct
     * @cover ::__toString
     */
    public function testConstruct() {

        $fromRequired = new Required();
        $this->assertEquals('required', $fromRequired,'Constructor Is Not Working');
    }
}