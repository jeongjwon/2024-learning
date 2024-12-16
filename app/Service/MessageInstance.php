<?php

namespace App\Service;

class MessageInstance
{
    public array $messageBox = [];


    public function addMessage($data)
    {
        array_push($this->messageBox, $data);
    }
    public function printMessage()
    {
        return join('<br/>', $this->messageBox);  
    }
}