<?php

use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Role;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < rand(30, 50); $i++) {
            factory(App\Models\Sponsor::class)->create();
        }
    }
}
