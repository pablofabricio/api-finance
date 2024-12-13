<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class DashboardCategoryValueResource extends JsonResource
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
            "amount" => (float) $this->amount,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "due_date" => $this->due_date,
            "due_day" => $this->due_day,
            "installments" => $this->installments,
            "recurrence" => $this->recurrence,
            "status" => $this->status,
            "payment_method" => $this->payment_method,
            "subcategory_id" => $this->subcategory_id,
        ];
    }
}
