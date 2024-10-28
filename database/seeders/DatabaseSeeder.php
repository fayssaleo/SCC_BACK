<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $user = new User();
        $user->username="0315";
        $user->FirstName="Fayssal";
        $user->LastName="OUREZZOUQ";
        $user->email="fayssal.ourezzouq@tangeralliance.com";
        $user->password="Initial123";
        $user->save();
    }
}
