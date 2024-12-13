<?php

namespace App\Http\Resources\Values;

use Illuminate\Http\Resources\Json\JsonResource;

class ValueResource extends JsonResource
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
            "amount" => $this->amount,
            "start_date" => $this->start_date,
            "end_date" => $this->start_date,
            "due_date" => $this->due_date,
            "recurrence" => $this->recurrence,
            "installments" => $this->installments,
            "status" => $this->status,
            "payment_method" => $this->payment_method,
        ];
    }
}
