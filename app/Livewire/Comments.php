<?php

namespace App\Livewire;

use Livewire\Component;

class Comments extends Component
{
    protected $listeners = [
        'delete' => '$refresh',
    ];
    
    public function render()
    {
        return view('livewire.comments', [
            'comments' => \App\Models\Comment::all(),
        ]);
    }
}
