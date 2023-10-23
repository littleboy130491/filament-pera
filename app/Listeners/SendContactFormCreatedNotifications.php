<?php

namespace App\Listeners;

use App\Events\ContactFormCreated;
use App\Models\User;
use App\Notifications\NewContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactFormCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactFormCreated $event): void
    {

        $user = User::where('id', 2)->first();
        $user->notify(new NewContactForm($event->contact_form));


    }
}
