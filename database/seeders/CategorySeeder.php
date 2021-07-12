<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Bebidas',
            'image'=>'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name'=>'Comida',
            'image'=>'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name'=>'Electronicos',
            'image'=>'https://dummyimage.com/200x150/5c5756/fff'
        ]);
    }
}