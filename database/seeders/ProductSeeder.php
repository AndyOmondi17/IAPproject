<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        'name'=>'Death Amongs Us',
        'price'=>'3000',
        'category'=>'Fictional Horror',
        'description'=>'Will gut you to the bones',
        'gallery'=>'https://images.pexels.com/photos/2228580/pexels-photo-2228580.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
        ]); 
    }
}
