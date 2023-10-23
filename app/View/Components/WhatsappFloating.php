<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Setting;

class WhatsappFloating extends Component
{

    public $whatsapp_number = '+628113380020';
    public $whatsapp_message = '';
    /**
     * Create a new component instance.
     */
    public function __construct(Setting $settings)
    {
        $this->whatsapp_number = $settings->firstWhere('title', 'whatsapp_number')->value ?? config('app.whatsapp_number');
        $this->whatsapp_message = $settings->firstWhere('title', 'whatsapp_message')->value ?? config('app.whatsapp_message');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.whatsapp-floating');
    }
}
