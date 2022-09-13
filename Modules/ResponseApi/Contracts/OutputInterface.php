<?php

namespace Modules\ResponseApi\Contracts;
interface OutputInterface
{

    /**
     * @param $data
     * @return mixed
     */
    public function toArray($data);
}
