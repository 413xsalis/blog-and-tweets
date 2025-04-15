<?php

namespace App\Exceptions;

use App\Models\Entry;
use Exception;

class InvalidEntrySlugException extends Exception
{
    private $entry;

    public function __construct(Entry $entry){
        $this->entry = $entry;
        parent::__construct();
    }
    public function render(){
        return redirect($this->entry->getUrl());
    }
}
