<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('categories')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      DB::table('categories')->insert([
        [
          'name' => 'Scholarship'
        ],
        [
          'name' => 'Fellowship'
        ],
        [
          'name' => 'Internship'
        ]
      ]);
    }
}
