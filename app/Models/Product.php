<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'description',
        'cover_image',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    public function category() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
