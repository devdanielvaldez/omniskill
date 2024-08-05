<?php

declare(strict_types=1);

namespace App\Support\Chatbot;

use Livewire\Features\SupportAttributes\Attribute as LivewireAttribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Embeddable extends LivewireAttribute
{
}