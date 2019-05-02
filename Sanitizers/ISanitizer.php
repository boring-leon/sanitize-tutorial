<?php

namespace App\Sanitizers;

interface ISanitizer
{
    public function sanitizeItem($data);
}