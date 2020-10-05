<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('opportunities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(App\Models\Opportunity::class,300)->create()->each(function ($opportunity){
            $opportunity->detail()->save(factory(App\Models\OpportunityDetail::class)->make());
        });
    }
}
