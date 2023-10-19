<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule(['required', 'email'])]
    public string $email;

    #[Rule(['required', 'min:6'])]
    public string $password;

    public function login()
    {
        if(Auth::attempt($this->validate()))
        {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'These credentials do not match our records.'
        ]);
    }
}
