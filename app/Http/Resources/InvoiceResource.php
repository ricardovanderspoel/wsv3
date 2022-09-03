<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\InvoiceLineResource;

class InvoiceResource extends JsonResource {
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
            'company_id' => $this->company_id,
            'user_id' => $this->user_id,
            'invoice_number' => $this->invoice_number,
            'invoice_date' => $this->invoice_date,
            'invoice_due_date' => $this->invoice_due_date,
            'invoice_status' => $this->invoice_status,
            'invoice_total' => $this->invoice_total,
            'invoice_paid' => $this->invoice_paid,
            'invoice_balance' => $this->invoice_balance,
            'invoice_notes' => $this->invoice_notes,
            'invoice_terms' => $this->invoice_terms,
            'invoice_footer' => $this->invoice_footer,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'invoice_lines' => InvoiceLineResource::collection($this->invoice_lines),
        ];
    }
}