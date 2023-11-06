<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Organization extends Component
{
    public $organization;

    public function __construct($organization)
    {
        $this->organization = $organization;
    }

    public function render(): View|Closure|string
    {
        return view('components.card.organization');
    }
}
