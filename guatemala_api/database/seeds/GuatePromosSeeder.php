<?php

use App\GuatePromos;
use Illuminate\Database\Seeder;

class GuatePromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\GuatePromos::class, 20)->create();
    }
}
