<?php

namespace App\Services;

use Nette\Utils\Random;

class TokenService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function generate(): string
    {
        return Random::generate(50, '0-9a-zA-Z');
    }
}
