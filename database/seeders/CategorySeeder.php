<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "name" => 'All Products',
                "slug" => 'all-products',
                "icon" => "images/icons/cart.svg",
                "description" => "Everything in One Place",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => 'Templates',
                "slug" => 'templates',
                "icon" => "images/icons/laptop.svg",
                "description" => "Designs Made Easy",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => 'Ebooks',
                "slug" => 'ebooks',
                "icon" => "images/icons/book.svg",
                "description" => "Read and Learn",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => 'Courses',
                "slug" => 'courses',
                "icon" => "images/icons/hat.svg",
                "description" => "Expand Your Skills",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => 'Fonts',
                "slug" => 'fonts',
                "icon" => "images/icons/pen.svg",
                "description" => "Typography Selection",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
