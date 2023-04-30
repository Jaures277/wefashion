<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(100)
            ->state(new Sequence(
                function (Sequence $sequence) { return [
                    'categoryId' => Category::all()->random(),
                ]; },
            ))
            ->create();
    }
}
