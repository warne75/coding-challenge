<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use File;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Product::truncate();

        $json = File::get("storage/json/catalog.json");
        $products = json_decode($json); 
      
         //dd($data);
        foreach ($products->products as $key => $value) {   
        //dd($value);      
             Product::create([
                 "name" => $value->name,
                 "category" => $value->category,
                 "sku" => $value->sku,
                 "price" => $value->price,
                 "quantity" => $value->quantity,


             	]);

        }
    }
}
