<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ["name"=> "Senza Lattosio"],

            ["name"=> "Senza Glutine"],

            ["name"=> "Carne"],

            ["name"=> "Pesce"],

            ["name"=> "Verdura"],

            ["name"=> "Uova"],

            ["name"=> "Latte"],

            ["name"=> "Frutta"]
          ];
      
          foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
          }
    }
}
