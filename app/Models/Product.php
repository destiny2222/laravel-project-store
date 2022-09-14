<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillabe = [
        'name',
        'image',
        'price',
        'description',
        'SKU',
        'discount',
        'slug',
        'category_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute($value){
        $this->attributes['slug'] = Str::slug($value);
    }
    public function getPriceAttribute(){

    }
}
