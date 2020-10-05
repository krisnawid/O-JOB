<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardLowongan extends Component
{

    public $judul;
    public $perusahaan;
    public $alamat;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($judul, $perusahaan, $alamat)
    {
        $this->judul = $judul;
        $this->perusahaan = $perusahaan;
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-lowongan');
    }
}
