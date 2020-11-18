<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class clientResources extends JsonResource
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
            'nomclient' => $this->name,
            'prenomclient' => $this->firstname,
        ];
    }
}
