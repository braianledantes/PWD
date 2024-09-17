<?php

class ModeloException extends RuntimeException
{
    public function __construct($message, $codigo = 0, Exception $previous  = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
