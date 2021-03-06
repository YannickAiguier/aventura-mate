<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_has_products()
    {
        return $this->hasMany(OrderHasProducts::class);
    }

    public function getPriceVatAttribute()
    {
        return round(($this->price + ($this->price * $this->vat) / 100) / 100, 2);
    }
}
