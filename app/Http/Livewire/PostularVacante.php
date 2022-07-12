<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf',
    ];

    use WithFileUploads;

    public function postularme()
    {
        $datos = $this->validate();

        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
