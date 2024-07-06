<?php

namespace Database\Seeders\System;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        Module::insert([
            [
                'name' => 'general',
                'code' => 'G',
                'short' => 'general',
                'path' => 'general',
                'model' => 'App\Models\General',
                'view' => null,
                'controller' => null,
            ],
            [
                'name' => 'human resources',
                'code' => 'HR',
                'short' => 'human_resource',
                'path' => 'human-resource',
                'model' => 'App\Models\HumanResources',
                'view' => null,
                'controller' => null,
            ],
            [
                'name' => 'finance',
                'code' => 'FIN',
                'short' => 'finance',
                'path' => 'finance',
                'model' => 'App\Models\Finance',
                'view' => null,
                'controller' => null,
            ],
            [
                'name' => 'inventory',
                'code' => 'INV',
                'short' => 'inventory',
                'path' => 'inventory',
                'model' => 'App\Models\Inventory',
                'view' => null,
                'controller' => null,
            ],
            [
                'name' => 'project',
                'code' => 'PRJ',
                'short' => 'project',
                'path' => 'project',
                'model' => 'App\Models\Project',
                'view' => null,
                'controller' => null,
            ],
            [
                'name' => 'contracts',
                'code' => 'CON',
                'short' => 'contracts',
                'path' => 'contracts',
                'model' => 'App\Models\Contracts',
                'view' => null,
                'controller' => null,
            ],
        ]);
    }
}
