<?php

namespace Modules\ResponseApi\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\ResponseApi\Services\JsonParser;
use Modules\ResponseApi\Services\XmlParser;

class ResponseApiController extends Controller
{
    protected $apiUrlSingle;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function __construct()
    {
        $this->apiUrlSingle = config('response_api.single_user.url'); // api url in config
    }

    public function single()
    {

    }

    public function parse($input, $type = 'json')
    {
        //check data type
        switch ($type){
            case 'json':
                $output = new  JsonParser();
                break;
            case 'xml':
                $output = new  XmlParser();
                break;
            default:
                dd('error');

        }
        return $output->single($input); // parse data
    }
}
