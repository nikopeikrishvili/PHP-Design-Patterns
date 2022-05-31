<?php

namespace DesignPatterns\Structural\Composite;

class Form implements RenderableInterface
{

    /**
     * @var RenderableInterface[]
     */
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';
        foreach ($this->elements as $element)
        {
            $formCode .=$element->render();
        }
        $formCode .= '</form>';
        return $formCode;
    }


    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}