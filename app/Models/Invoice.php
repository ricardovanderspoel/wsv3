<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->hasMany(InvoiceItem::class);
    }

    public function getSubtotalAttribute() {
        return $this->items->sum('total');
    }

    public function getTaxAttribute() {
        return $this->subtotal * 0.2;
    }

    public function getTotalAttribute() {
        return $this->subtotal + $this->tax;
    }
}
