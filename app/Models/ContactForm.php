<?php

namespace App\Models;

use App\Events\ContactFormCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'purpose'
    ];

    protected $casts = [
        'purpose' => 'array',
    ];

    protected $dispatchesEvents = [
        'created' => ContactFormCreated::class,
    ];
}
