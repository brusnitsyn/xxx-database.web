<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer',
        'material',
        'weight',
        'article',
        'cost',
        'description',
        'image_url',
        'category_id',
    ];

    /**
     * Get once of the category for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo(CategoryObject::class);
    }

    /**
     * Get all of the colors for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function colors()
    {
        return $this->hasMany(ProductColor::class);
    }
}
