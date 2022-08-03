<?php

namespace LaminaTheme;

use StarringJane\WordpressBlade\Component;

class Page extends Component
{
    public function render()
    {
        return $this->view('pages.default', [
            'post' => get_post(),
        ]);
    }
}