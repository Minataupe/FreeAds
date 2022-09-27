<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddRessources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'add_id' => $this->resource->id,
            'name' => $this->resource->name,
            'price' => $this->resource->price,
            'desc' => $this->resource->desc,
            'picture' => $this->resource->picture
            
        ];
    }
    //return parent::toArray($request);
}
