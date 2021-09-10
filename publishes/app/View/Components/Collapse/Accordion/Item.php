<?php

namespace App\View\Components\Collapse\Accordion;

use Roots\Acorn\View\Component;

class Item extends Component
{
    /**
     * Accordion ID
     *
     * @var string
     */
    public $accordionId = '';

    /**
     * Item ID
     *
     * @var string
     */
    public $id = '';

    /**
     * Show this item
     *
     * @var boolean
     */
    public $show = false;

    /**
     * Heading ID
     *
     * @var string
     */
    public $headingId = '';

    /**
     * Create a new component instance.
     *
     * @param string $accordionId The ID of the parent accordion
     * @return void
     */
    public function __construct(string $accordionId, string $id = null, string $headingId = null, bool $show = false)
    {
        $uniqueId = uniqid();
        $this->accordionId = $accordionId;
        $this->show = $show;
        $this->id = $id ?: 'collapse-' . $uniqueId;
        $this->headingId = $headingId ?: 'heading-' . $uniqueId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.collapse.accordion.item');
    }
}
