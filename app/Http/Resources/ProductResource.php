<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'category' => $this->category->name,
            'sku' => $this->sku,
            'price' => number_format(($this->price /100), 2, '.'),
            'quantity' => $this->quantity,
        ];
    }
}
