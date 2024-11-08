<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
 
        $category = Category::where('name', 'Elektronika')->first();
        $category->products()->create(['name' => 'Laptop', 'price' => 3000.00]);
        $category->products()->create(['name' => 'Smartfon', 'price' => 1500.00]);
        $category = Category::where('name', 'Książki')->first();
        $category->products()->create(['name' => 'Harry Potter', 'price' => 45.00]);
        $category->products()->create(['name' => 'Władca Pierścieni', 'price' => 60.00]);
    }
}
