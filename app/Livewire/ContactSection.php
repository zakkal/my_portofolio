<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class ContactSection extends Component
{
    public $name = '';
    public $email = '';
    public $pesan_user = '';

    public function mount()
    {
        if (auth()->check()) {
            $this->email = auth()->user()->email;
            $this->name = auth()->user()->name;
        }
    }

    public function submitMessage()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'pesan_user' => 'required|min:5',
        ]);

        // Mengirim email ke alamat Anda
        Mail::to('zaki.alghifari0306@gmail.com')->send(new \App\Mail\ContactMessageMail(
            $this->name,
            $this->email,
            $this->pesan_user
        ));
        
        $this->dispatch('message-sent');
        $this->reset(['pesan_user']);
    }

    public function render()
    {
        return view('livewire.contact-section');
    }
}
