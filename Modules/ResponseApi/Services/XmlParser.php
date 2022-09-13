<?php

namespace Modules\ResponseApi\Services;

use Modules\ResponseApi\Contracts\ApiParserInterface;

class XmlParser implements ApiParserInterface
{
    //xml parser
    /**
     * @param $data
     * @return array
     */
    public function single($data)
    {
        $xml = simplexml_load_string($data);
        $toArray = json_decode(json_encode($xml->children()));
        return (array) $toArray->data->item;
    }
}
