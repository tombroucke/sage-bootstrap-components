<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Checkbox extends Component
{

    public $name = '';

    public $value = '';

    public $checked = false;

    public $switch = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $value = '', bool $checked = false, bool $switch = false)
    {
        $this->name = $name;
        $this->value = $value;
        $this->checked = $checked;
        $this->switch = $switch;
    }

    public function render()
    {
        return view('components.checkbox');
    }

    public function id() {
        $id = $this->name;
        if ($this->value) {
            $id .= '-' . $this->value;
        }
        return $id;
    }

    /**
     * Element classes
     *
     * @return string
     */
    public function classes()
    {
        $classes = ['form-check'];
        if ($this->switch) {
            $classes[] = 'form-switch';
        }
        return implode(' ', $classes);
    }
}
