<?php

namespace App\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public \App\Models\Comment $comment;

    public function delete()
    {
        $this->comment->delete();
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
