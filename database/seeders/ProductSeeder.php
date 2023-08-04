<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Product::create([
        'name' => 'LARAVEL Y LIVEWIRE',
        'cost' => 200,
        'price' => 350,
        'barcode' => '75010053507',
        'stock' => 1000,
        'alerts' => 10,
        'category_id' => 1,
        'image' => 'curso.png'
      ]);

      Product::create([
        'name' => 'RUNNING NIKE',
        'cost' => 250,
        'price' => 450,
        'barcode' => '76110053507',
        'stock' => 500,
        'alerts' => 10,
        'category_id' => 2,
        'image' => 'curso.png'
      ]);

      Product::create([
        'name' => 'IPHONE 11',
        'cost' => 850,
        'price' => 1000,
        'barcode' => '76111053507',
        'stock' => 120,
        'alerts' => 10,
        'category_id' => 3,
        'image' => 'curso.png'
      ]);

      Product::create([
        'name' => 'PC GAMMER',
        'cost' => 550,
        'price' => 750,
        'barcode' => '76111264507',
        'stock' => 100,
        'alerts' => 10,
        'category_id' => 4,
        'image' => 'curso.png'
      ]);
    }
}
