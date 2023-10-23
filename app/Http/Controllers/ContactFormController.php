<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|max:255',
        ]);

        $data = $request->validated();

        ContactForm::create($data);

        return redirect()->to(app('url')->previous() . "#submit-notification")->with('success', 'Thank you for contacting us! Form has been submited.');

    }
}
