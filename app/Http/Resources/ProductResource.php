<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'manufacturer' => $this->manufacturer,
            'material' => $this->material,
            'weight' => $this->weight,
            'article' => $this->article,
            'cost' => $this->cost,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'category' => CategoryObjectResource::make($this->category),
            'colors' => ProductColorResource::collection($this->colors),
        ];
    }
}
