<?php

namespace Modules\ResponseApi\Exceptions;

use Exception;
use Modules\ResponseApi\Contracts\OutputInterface;

class ApiTypeException extends Exception implements OutputInterface
{
    // type data error handling

    public function toArray($data)
    {
        return (object)['message' => $data];
    }
}
