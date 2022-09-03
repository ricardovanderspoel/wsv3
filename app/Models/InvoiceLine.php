<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    use HasFactory;

    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }

    public function getSubtotalAttribute() {
        return $this->quantity * $this->price;
    }

    public function getTaxAttribute() {
        return $this->subtotal * 0.2;
    }

    public function getTotalAttribute() {
        return $this->subtotal + $this->tax;
    }
}
