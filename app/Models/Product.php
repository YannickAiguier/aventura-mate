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

    public static function calculatorVAT($id)
    {
        $fetchProduct = Product::find($id);
        $PriceWithVat=(round(($fetchProduct['price']+($fetchProduct['price']*$fetchProduct['vat'])/100)/100,2));

        return $PriceWithVat;
    }
}
