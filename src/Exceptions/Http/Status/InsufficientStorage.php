<?php

namespace Pkit\Exceptions\Http\Status;

use Pkit\Http\Status;

class InsufficientStorage extends StatusException
{
    public function __construct(string $message, $th = null)
    {
        parent::__construct($message, Status::INSUFFICIENT_STORAGE, $th);
    }
}