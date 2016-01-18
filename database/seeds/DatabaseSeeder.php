<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategorySeeder::class);
<<<<<<< HEAD
=======
        $this->call(ProductSeeder::class);

>>>>>>> fb71b1e6678877ff78f8e530822bad2b7e25a1ad

        Model::reguard();
    }
}
