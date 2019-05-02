<?php

namespace App\Models;
use App\Sanitizers\CustomSanitizer;

class Post extends BaseModel
{
    public $guarded = [];   
    public $sanitize = ['title', 'body'];
    public $sanitizer = CustomSanitizer::class;
}
