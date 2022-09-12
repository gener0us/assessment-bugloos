<?php

namespace Modules\ResponseApi\Contracts;

interface ApiParserInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function single($data);
}
