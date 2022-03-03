<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class CategoryIndex extends Component
{
    use WithPagination;
    public $category,$subcategoria;
    public $view = "grid";

    public function render()
    {

        return view('livewire.category-index');
    }

    public function limpiar(){
        $this->reset(['subcategoria','page']);
    }


    public function updatedSubcategoria(){
        $this->resetPage();
    }
}
