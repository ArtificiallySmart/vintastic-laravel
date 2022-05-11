<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'short',
        'category_id',
        'subcategory_id',
        'thumbnail',
        'designer',
        'brand',
        'style',
        'period',
        'state',
        'stock',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
