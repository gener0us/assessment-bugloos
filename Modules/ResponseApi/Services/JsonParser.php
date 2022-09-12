<?php

namespace Modules\ResponseApi\Services;

use Modules\ResponseApi\Contracts\ApiParserInterface;

class JsonParser implements ApiParserInterface
{
    // Json parser
    public function single($data)
    {
       return (array) json_decode($data)->data[0];
    }
}
