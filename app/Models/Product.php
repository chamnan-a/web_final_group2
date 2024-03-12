<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'detail', 'image','product_type_id','country_id'
    ];
    public function productType():BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }
}
