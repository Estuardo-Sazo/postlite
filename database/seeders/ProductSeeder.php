<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::create([
            'name' => 'Coca Cola lata',
            'cost' =>3.5,
            'price'=>5,
            'barcode'=>'45688955',
            'stock' =>100,
            'alerts' =>15,
            'category_id' =>1,
            'image'=>'coca.jpg'
        ]);

        Product::create([
            'name' => 'Pan Hamburguesa',
            'cost' =>15,
            'price'=>18,
            'barcode'=>'4565575',
            'stock' =>100,
            'alerts' =>15,
            'category_id' =>2,
            'image'=>'coca.jpg'
        ]);

        Product::create([
            'name' => 'USB 32GB KINSGTON',
            'cost' =>50,
            'price'=>62,
            'barcode'=>'4667225',
            'stock' =>25,
            'alerts' =>5,
            'category_id' =>3,
            'image'=>'coca.jpg'
        ]);
        
    }
}