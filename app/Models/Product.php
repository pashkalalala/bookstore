<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;
    protected $fillable = [
        'name',
        'description',
        'short_description',
        'image',
        'is_active',
        'slug',
        'price'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getImage()
    {
        if (str_starts_with($this->image, 'http')) {
            return $this->image;
        }
        return '/storage/'.$this->image;
    }
}
