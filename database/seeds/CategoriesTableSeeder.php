<?php

use App\Models\Posts\Category;
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
        $items = [
            [
                'name' => 'Uncategorize',
                'description' => "This post doesn't have a category."
            ]
        ];
        foreach(collect($items) as $item) {
            Category::create([
                'name' => $item['name'],
                'slug' => \Str::slug($item['name']),
                'description' => $item['description'],
            ]);
        }
    }
}
