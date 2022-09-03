<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource {
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'country' => $this->country,
            'vat' => $this->vat,
            'iban' => $this->iban,
            'bic' => $this->bic,
            'subscription_type' => $this->subscription_type,
            'subscription_expiry' => $this->subscription_expiry,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}