<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \DB::beginTransaction();
        try {
            $this->call([
                UserSeeder::class,
                UserRoleSeeder::class,
                MenuSeeder::class
            ]);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            echo $e;
        }
    }
}
