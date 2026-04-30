<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $email;
    public $status;

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
        ];
    }

    public function sendPasswordResetLink()
    {
        $this->validate();

        $status = Password::broker()->sendResetLink(
            ['email' => $this->email]
        );

        if ($status == Password::RESET_LINK_SENT) {
            $this->status = __($status);
            $this->email = '';
        } else {
            $this->addError('email', __($status));
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('components.layouts.app', ['title' => 'Lupa Password - Zaki Portfolio']);
    }
}
