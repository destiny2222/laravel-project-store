<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug', 'image'];

    public function getSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
