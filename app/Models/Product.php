<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','brand_id','category_id', 'price', 'stock'];
    
    // Relasi ke Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
