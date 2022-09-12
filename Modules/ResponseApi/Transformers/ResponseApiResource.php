<?php

namespace Modules\ResponseApi\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\ResponseApi\Contracts\OutputInterface;

class ResponseApiResource extends JsonResource implements OutputInterface
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
