<?php

namespace App\Listeners;

use App\Services\SanitizationHandler;
use App\Events\SavingModel;

class SanitizeModel
{
    public function handle(SavingModel $event){
        $handler = new SanitizationHandler($event->model->getSanitizer());
        
        foreach($event->model->sanitize as $item){
            $event->model->{$item} = $handler->sanitize($event->model->{$item});
        }
    }
}
