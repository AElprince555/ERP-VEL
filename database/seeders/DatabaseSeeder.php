<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\System\ApplicationSeeder;
use Database\Seeders\System\ModuleSeeder;
use Database\Seeders\System\SubModuleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'ERP-VEL',
            'email' => 'admin@erp-vel.com',
            'password' => '01011263555'
        ]);
        $this->call([
            ModuleSeeder::class,
            SubModuleSeeder::class,
            ApplicationSeeder::class,
        ]);
    }
}
