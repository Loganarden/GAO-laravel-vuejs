<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class attributionResources extends JsonResource
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
            'nomposte' => $this->resource->nomposte,
            'nomclient' =>$this->resource->nomclient,
            'prenomclient' =>$this->resource->prenomclient,
        ];
        //return parent::toArray($request);
    }
}
