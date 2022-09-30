<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $namaPageAktif;
    public function __construct($namaPageAktif)
    {
        $this->namaPageAktif = $namaPageAktif;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-title');
    }
}
