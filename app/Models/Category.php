<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [ "name", "description" ];

    /**
     * Association OneToMany avec les produits
     * Chaque type (catégorie) comporte un certain nombre de produits
     *
     * @return HasMany
     */

    public function products(): HasMany
    {
        return $this->HasMany(Product::class);
    }
}
