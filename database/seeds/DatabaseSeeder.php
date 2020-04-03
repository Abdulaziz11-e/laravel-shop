<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'OMEGA',
                'price' => '50',
                'image' => 'picture10.jpg',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'HUAWEI',
                'price' => '60',
                'image' => 'picture8.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'GALAXY WATCH',
                'price' => '70',
                'image' => 'picture3.jpg',
                'top9' => 1,
            ]
        ); 

        Product::create(
            [
                'name' => 'SAMSUNG WATCH',
                'price' => '80',
                'image' => 'picture4.jpg',
                'top9' => 1,
            ]
        ); 

        Product::create(
            [
                'name' => 'Tank Top',
                'price' => '90',
                'image' => 'picture5.jpg',
                'top9' => 0,
            ]
        ); 

        Product::create(
            [
                'name' => 'TISSOT',
                'price' => '95',
                'image' => 'picture2.jpg',
                'top9' => 0,
            ]
        ); 

        Product::create(
            [
                'name' => 'TISSOT',
                'price' => '75',
                'image' => 'picture6.jpg',
                'top9' => 1,
            ]
        ); 

        Product::create(
            [
                'name' => 'BOSS',
                'price' => '55',
                'image' => 'picture7.jpg',
                'top9' => 0,
            ]
        ); 

        Product::create(
            [
                'name' => 'SAMSUNG',
                'price' => '100',
                'image' => 'picture8.jpg',
                'top9' => 1,
            ]
        ); 


    }
}
