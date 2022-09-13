<?php

namespace Modules\ResponseApi\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Modules\ResponseApi\Contracts\OutputInterface;
use Modules\ResponseApi\DTO\ResponseApiDto;
use Modules\ResponseApi\Exceptions\ApiTypeException;
use Modules\ResponseApi\Services\JsonParser;
use Modules\ResponseApi\Services\RepresentApiService;
use Modules\ResponseApi\Services\RepresentSingleApiService;
use Modules\ResponseApi\Services\XmlParser;
use Modules\ResponseApi\Transformers\ResponseApiResource;
use Throwable;

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

    public function single(RepresentSingleApiService $service, Request $request): OutputInterface
    {
        try {
            $type = $request->get('type') ?? 'json'; // type data
            $body = Http::get($this->apiUrlSingle)->body(); // get data from api
            $dto = ResponseApiDto::fromArray($this->parse($body, $type)); // check data type and mapping data
            $result = $service->handle($dto); // save data to DB
            return ResponseApiResource::make($result); // response
        } catch (Throwable $e) {
            throw new ApiTypeException('unexpected error happened');
        }
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
                throw new ApiTypeException('type not defined');

        }
        return $output->single($input); // parse data
    }
}
