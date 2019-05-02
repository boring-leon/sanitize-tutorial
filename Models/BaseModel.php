<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Sanitizers\BaseSanitizer;
use App\Sanitizers\ISanitizer;

class BaseModel extends Model
{
    public $dispatchesEvents = [
        'saving' => 'App\Events\SavingModel'
    ];
    
    public $sanitize = [];
    public $sanitizer = BaseSanitizer::class;

    public function getSanitizer() :ISanitizer{
        return new $this->sanitizer;
    }
}