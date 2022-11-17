<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 10; $i++) { 
            Product::create([
                'category_id' => 1,
                'title' => 'Main Course title #' . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit provident qui dolor earum nobis ipsam, cupiditate tempore odio.',
                'price' => 1 . $i . 97,
                'featured' => true,
                'imageName' => 'photo-0.png',
            ]);
        }
        for ($i=0; $i < 5; $i++) { 
            Product::create([
                'category_id' => 2,
                'title' => 'Soup title #' . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit provident qui dolor earum nobis ipsam, cupiditate tempore odio.',
                'price' => 1 . $i . 97,
                'featured' => false,
                'imageName' => 'photo-0.png',
            ]);
        }
        for ($i=0; $i < 7; $i++) { 
            Product::create([
                'category_id' => 3,
                'title' => 'Desert title #' . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit provident qui dolor earum nobis ipsam, cupiditate tempore odio.',
                'price' => 1 . $i . 97,
                'featured' => false,
                'imageName' => 'photo-0.png',
            ]);
        }
        for ($i=0; $i < 8; $i++) { 
            Product::create([
                'category_id' => 4,
                'title' => 'Drink title #' . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit provident qui dolor earum nobis ipsam, cupiditate tempore odio.',
                'price' => 1 . $i . 97,
                'featured' => false,
                'imageName' => 'photo-0.png',
            ]);
        }
    }
}
