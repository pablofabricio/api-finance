<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class DashboardCategoryResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "percent" => $this->percent,
            "years" => $this->years,
            "values" => DashboardCategoryValueResource::collection($this->values),
        ];
    }
}
