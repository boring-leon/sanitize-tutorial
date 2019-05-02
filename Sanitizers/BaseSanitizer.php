<?php

namespace App\Sanitizers;

class BaseSanitizer implements ISanitizer
{
    public function sanitizeItem($data){
        return htmlspecialchars($data, ENT_QUOTES);
    }
}