<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

try {
    $modules = \App\Models\Module::all();
    $subModules = \App\Models\SubModule::all();
    $apps = \App\Models\Application::all();
    $methods = \App\Models\Method::all();
    Route::middleware([
        'auth',
        'verified'
    ])->group(function () use ($modules, $subModules, $apps, $methods) {
        foreach ($modules as $module) {
            Route::get(str_replace('.', '/', $module->path), function () use ($module) {
                return view('pages.modules', ['module' => $module]);
            })->name($module->short);
        }
        foreach ($subModules as $subModule) {
            Route::get(str_replace('.', '/', $subModule->path), function () use ($subModule) {
                return view('pages.subModules', ['subModule' => $subModule]);
            })->name($subModule->short);
        }
        foreach ($apps as $application) {
            Route::get(str_replace('.', '/', $application->path), function () use ($application) {
                return view('pages.application', ['application' => $application]);
            }
            )->name($application->short);
        }
        /*        foreach ($apps as $application) {
                    Route::get(str_replace('.', '/', $application->path),
                        ($application->controller) ? (new
                    $application->controller)::class : (new App\Livewire\Layout\DynamicTable\Index)::class
                    )->name($application->short);
                }*/

    });
} catch (Exception $ex) {
}
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware([
        'auth',
        'verified'
    ])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
