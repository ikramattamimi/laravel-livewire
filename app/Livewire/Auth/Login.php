<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components.layouts.guest')]

    public LoginForm $form;

    public function login()
    {
        $this->form->login();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
