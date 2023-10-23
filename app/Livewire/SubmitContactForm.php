<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\ContactForm;

class SubmitContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $purpose = 'test';

    public $after_submit_message = '';

    public function save()
    {
        // ContactForm::create(
        //     $this->all()
        // );

        // $this->reset();

        $this->after_submit_message = "Form successfully submitted.";

        // return $this->redirect('/posts')
        //     ->with('status', 'Post successfully created.');

    }
    public function render()
    {
        return view('livewire.submit-contact-form');
    }
}
