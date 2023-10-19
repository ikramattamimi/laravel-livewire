<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
