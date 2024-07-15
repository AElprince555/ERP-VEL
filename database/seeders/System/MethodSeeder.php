<?php

namespace Database\Seeders\System;

use Illuminate\Database\Seeder;
use App\Models\Application;
use App\Models\Method;
class MethodSeeder extends Seeder
{
    public function run(): void
    {
        $applications = Application::all();

        foreach ($applications as $application) {
            $methods = [
                [
                    'name' => $application->name . ' create',
                    'code' => $application->code . '-CRT',
                    'short' => $application->short . '.create',
                    'path' => $application->path . '/create',
                    'view' => ($application->view)?$application->controller.'.create':null,
                    'model' => $application->model,
                    'controller' => ($application->controller)?$application->controller.'\\Create':null,
                    'module_id' => $application->module_id,
                    'sub_module_id' => $application->sub_module_id,
                    'application_id' => $application->id,
                ],
                [
                    'name' => $application->name . ' delete',
                    'code' => $application->code . '-DEL',
                    'short' => $application->short . '.delete',
                    'path' => $application->path . '/delete',
                    'view' => ($application->view)?$application->view.'.delete':null,
                    'model' => $application->model,
                    'controller' => ($application->controller)?$application->controller.'\\Delete':null,
                    'module_id' => $application->module_id,
                    'sub_module_id' => $application->sub_module_id,
                    'application_id' => $application->id,
                ],
                [
                    'name' => $application->name . ' view',
                    'code' => $application->code . '-VW',
                    'short' => $application->short . '.view',
                    'path' => $application->path . '/view',
                    'view' => ($application->view)?$application->view.'.view':null,
                    'model' => $application->model,
                    'controller' => ($application->controller)?$application->controller.'\\View':null,
                    'module_id' => $application->module_id,
                    'sub_module_id' => $application->sub_module_id,
                    'application_id' => $application->id,
                ],
                [
                    'name' => $application->name . ' show',
                    'code' => $application->code . '-SHW',
                    'short' => $application->short . '.show',
                    'path' => $application->path . '/show',
                    'view' => ($application->view)?$application->view.'.show':null,
                    'model' => $application->model,
                    'controller' => ($application->controller)?$application->controller.'\\Show':null,
                    'module_id' => $application->module_id,
                    'sub_module_id' => $application->sub_module_id,
                    'application_id' => $application->id,
                ],
                [
                    'name' => $application->name . ' update',
                    'code' => $application->code . '-UPD',
                    'short' => $application->short . '.update',
                    'path' => $application->path . '/update',
                    'view' => ($application->view)?$application->view.'.update':null,
                    'model' => $application->model,
                    'controller' => ($application->controller)?$application->controller.'\\Update':null,
                    'module_id' => $application->module_id,
                    'sub_module_id' => $application->sub_module_id,
                    'application_id' => $application->id,
                ],
            ];

            Method::insert($methods);
        }

    }
}
