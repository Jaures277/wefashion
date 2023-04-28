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
                    'product_id' => Product::all()->random(),
                    'size_id' => Size::all()->random(),
                    'quantity'=> random_int(1, 10)
                ]; },
            ))
            ->create();
    }
}
