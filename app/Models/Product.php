<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class, 'product_brand_id');
    }


    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }


    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

}
