<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use File;
use Validator;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Category::truncate();

        $json = File::get("storage/json/catalog.json");
        $categories = json_decode($json); 
      
         //dd($data);
        foreach ($categories->products as $key => $value) {   
        //dd($value);      
             
        	

        	$validator = Validator::make(	
                array('name'=> $value->category ),
        		array('name'=> 'unique:users' ),
        		);

        	if ($validator->passes()) 
    			{
        		$array = ['name' => $value->category];
        		$cat = new Category;           
       			$cat->create($array);
    		}
            
        }
    }
}
