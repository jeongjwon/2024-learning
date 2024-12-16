<?php

namespace App\Service;

use Illuminate\Support\Facades\Facade;
use App\Service\MessageInstance;
/**
 * @method public function addMessage()
 * @method public function printMEssage
 */
class Messages extends Facade {
    protected static function getFacadeAccessor(){
        return 'go';
    }
}