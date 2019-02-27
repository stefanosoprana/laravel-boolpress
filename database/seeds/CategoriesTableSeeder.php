<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Informatica', 'Motori', 'Moda'];

        foreach ($categories as $categoryName)
        {
          $newCategory = new Category;
          $newCategory->title = $categoryName;
          $newCategory->slug = Str::slug($categoryName);

          $newCategory->save();
        }
    }
}
