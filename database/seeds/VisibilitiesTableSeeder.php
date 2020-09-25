<?php

use App\Models\Posts\Visibility;
use Illuminate\Database\Seeder;

class VisibilitiesTableSeeder extends Seeder
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
                'name' => 'Public',
                'description' => 'Visible to everyone.'
            ],
            [
                'name' => 'Private',
                'description' => 'Only visible to site admins and editors.'
            ],
            [
                'name' => 'Password Protected',
                'description' => 'Protected with a password you choose. Only those with the password can view this post.'
            ],
        ];
        foreach(collect($items) as $item) {
            Visibility::create([
                'name' => $item['name'],
                'slug' => \Str::slug($item['name']),
                'description' => $item['description'],
            ]);
        }
    }
}
