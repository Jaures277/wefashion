<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Association ManyToOne avec les categories
     * Un produit a une seul categorie
     *
     * @return BelongsTo
     */

    public function categorie(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'categoryId');
    }

    /**
     * Association ManyToMany avec les tailles(size)
     * Chaque produit recevra plusieurs taille (successivement ou simultanément)
     *
     * @return BelongsToMany
     */

    public function sizes(): BelongsToMany
    {
        return $this->BelongsToMany(Size::class);
    }
}
