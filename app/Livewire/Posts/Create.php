<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Create extends Component
{
    #[Title('Create Post')]

    public PostForm $form;

    public function save()
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post->id);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
