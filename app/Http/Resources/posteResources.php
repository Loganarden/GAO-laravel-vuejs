<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class posteResources extends JsonResource
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
            'nomposte' => $this->resource->name,
            'attribution' => attributionResrouces::collection($this->resource->attribution),
        ];
        //return parent::toArray($request);
    }
}
