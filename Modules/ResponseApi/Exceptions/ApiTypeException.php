<?php

namespace Modules\ResponseApi\Exceptions;

use Exception;
use Modules\ResponseApi\Contracts\OutputInterface;

class ApiTypeException extends Exception implements OutputInterface
{
    // type data error handling
    public $message;

    public function __construct(string $message = "")
    {
        $this->message = $message;
    }

    /**
     * @param $data
     * @return object
     */
    public function toArray($data)
    {
        return (object)['data' => ['message' => $data, 'extra' => $this->message]];
    }
}
