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

        return $data;
    }

    public function sanitizeItem(string $data){
        return $this->sanitizer->sanitizeItem($data);
    }

    public function sanitizeArray(array $data){
        return array_map([$this, 'sanitizeItem'], $data);
    }
}