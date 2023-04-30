<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSize::factory()
            ->count(100)
            ->state(new Sequence(
                function (Sequence $sequence) { return [
                    'productId' => Product::all()->random(),
                    'sizeId' => Size::all()->random(),
                    'quantity'=> 1
                ]; },
            ))
            ->create();
    }
}
