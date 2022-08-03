<?php

namespace ThemeName\Components;

use StarringJane\WordpressBlade\Component;

class Button extends Component
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function render()
    {
        return $this->view('components.button', [
            'color' => $this->color(),
        ]);
    }

    protected function color()
    {
        return 'red';
    }
}
