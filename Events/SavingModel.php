<?php

namespace App\Events;

use App\Models\BaseModel;

class SavingModel
{
    public $model;
    
    public function __construct(BaseModel $model){
        $this->model = $model;
    }

}
