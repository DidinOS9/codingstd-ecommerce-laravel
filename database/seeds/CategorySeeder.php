<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'clothes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pants'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jacket'
        ]);

        DB::table('categories')->insert([
            'name' => 'Underwear'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hoodie'
        ]);
    }
}
