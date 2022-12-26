<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Radio extends Component
{
    public $name = '';

    public $value = '';

    public $checked = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $value = '', bool $checked = false)
    {
        $this->name = $name;
        $this->value = $value;
        $this->checked = $checked;
    }

    public function id()
    {
        $id = $this->name;
        if ($this->value) {
            $id .= '-' . $this->value;
        }
        return $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return $this->view('components.radio');
    }
}
