<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{

    public $name;

    public $email;

    public $message;

    public $ddd;

    public $phone;

    public $successMessage;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'message' => 'required|min:10',
        'ddd' => 'required',
        'phone' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        sleep(2);

        $validatedData = $this->validate();

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->message = $this->message;
        $contact->ddd = $this->ddd;
        $contact->phone = $this->phone;

        $this->reset(['name', 'email', 'message', 'ddd', 'phone']);

        $this->successMessage = "Hey {$contact->name}, o seu contato do estado {$contact->present()->nomeEstado} foi enviado com sucesso!";
    }
}
