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

    public function categorie(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'category_id');
    }

    public function sizes(): BelongsToMany
    {
        return $this->BelongsToMany(Size::class);
    }
}
