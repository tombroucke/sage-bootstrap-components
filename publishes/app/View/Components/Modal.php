<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Modal extends Component
{

    public $id = '';

    public $label = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $id = null)
    {
        $uniqueId = uniqid();
        $this->id = $id ?: 'modal-' . $uniqueId;
        $this->label = $this->id . '-label';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.modal');
    }
}
