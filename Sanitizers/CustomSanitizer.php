<?php

namespace App\Sanitizers;

class CustomSanitizer implements ISanitizer
{
    public function sanitizeItem($data){
        return '13221';
    }
}