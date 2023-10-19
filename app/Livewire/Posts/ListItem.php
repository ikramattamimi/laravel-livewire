<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy]

class ListItem extends Component
{

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    #[On('postCreated')]
    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.posts.list-item', compact('posts'));
    }
}
