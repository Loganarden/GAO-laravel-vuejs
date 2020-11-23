<?php

namespace App\Http\Resources;

use App\Http\Resources\attributionResources;
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
        $attributions = attributionResources::collection($this->attributions);
        return [
            'id' => $this->id,
            'nomposte' => $this->name,
            'attributions' => $attributions
        ];
        //return parent::toArray($request);
    }
}
