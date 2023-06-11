<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          "order_id"=>$this->order_id,
          "quantity"=>$this->quantity,
          "tax"=>$this->tax,
          "subtotal"=>$this->subtotal,
            "phone_id"=>$this->phone->id,
            "phone_name"=>$this->phone->name,
            "user_id"=>$this->user->id,
            "user_email"=>$this->user->email,
            "user_name"=>$this->user->name,
        ];
    }
}
