<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[\Livewire\Attributes\Rule(['required', 'min:6'])]
    public $title;

    #[\Livewire\Attributes\Rule(['required', 'min:6'])]
    public $body;

    public function store(): Post
    {
        $user = Auth::user();

        $validated = $this->validate();
        $post = $user->posts()->create($validated);

        flash('Post created successfully!')->success();
        // flash()->overlay('Post created successfully! Overlay', 'Success Message');

        $this->reset();

        return $post;
    }
}
