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
            "values" => [
                "id" => $this->category_id,
                "name" => $this->category_id,
                "value" => $this->category_id,
                "start_date" => $this->category_id,
                "end_date" => $this->category_id,
                "due_date" => $this->category_id,
                "due_day" => $this->category_id,
                "installments" => $this->category_id,
                "recurrence" => $this->category_id,
                "status" => $this->category_id,
                "payment_method" => $this->category_id,
                "category_id" => $this->category_id,
                "subcategory_id" => $this->subcategory_id,
            ]
        ];
    }
}
