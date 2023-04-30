<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Size extends Model
{
    use HasFactory;

    /**
     * Association ManyToMany avec les produits
     * Une taille regroupe plusieurs produits (successivement ou simultanément)
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->BelongsToMany(Product::class);
    }
}
