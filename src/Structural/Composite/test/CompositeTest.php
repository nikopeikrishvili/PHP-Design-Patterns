<?php

namespace DesignPatterns\Structural\Composite\test;

use DesignPatterns\Structural\Composite\ButtonElement;
use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;

class CompositeTest extends \PHPUnit\Framework\TestCase
{
    public function testCorrectHtmlWillBeRendered()
    {
        $form = new Form();

        $form->addElement(new InputElement());
        $form->addElement(new ButtonElement());

        $this->assertSame('<form><input type="text" /><button type="submit">Submit</button></form>', $form->render());
    }
}