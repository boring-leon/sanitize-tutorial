<?php

namespace App\Services;
use App\Sanitizers\ISanitizer;

class SanitizationHandler
{
    private $sanitizer;

    public function __construct(ISanitizer $sanitizer){
        $this->sanitizer = $sanitizer;
    }

    public function sanitize($data){
        if(is_string($data)){
            return $this->sanitizeItem($data);
        }
        else if(is_array($data)){
            return $this->sanitizeArray($data);
        }
    }

    public function sanitizeItem($data){
        return $this->sanitizer->sanitizeItem($data);
    }

    public function sanitizeArray($data){
        return array_map([$this, 'sanitizeItem'], $data);
    }
}