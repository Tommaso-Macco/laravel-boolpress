<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["category"=> "Horror", "second_category" => "Pragmatic"],

            ["category"=> "Thriller", "second_category" => "Pragmatic"],

            ["category"=> "Western", "second_category" => "Pragmatic"],

            ["category"=> "Action", "second_category" => "Pragmatic"],

            ["category"=> "Crime", "second_category" => "Pragmatic"],

            ["category"=> "Drama", "second_category" => "Pragmatic"]
          ];
      
          foreach ($categories as $category) {
            $newCat = new Category();
            $newCat->fill($category);
            $newCat->save();
          }
    }
}
