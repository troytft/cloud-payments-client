<?php

namespace CloudPayments\Exception;

class BaseException extends \Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message);
    }
}