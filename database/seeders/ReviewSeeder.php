<?php

namespace Database\Seeders;

use App\Models\Review;
use Database\Factories\ReviewFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            Review::create([
                'name' => 'Joe Doe',
                'email' => 'john@page.com',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid blanditiis nisi at, aut placeat dolor sequi autem id nulla quam.',
                'rating' => 4.5,
            ]);
        }
    }
}
