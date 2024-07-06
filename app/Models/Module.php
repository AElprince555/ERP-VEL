<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{

    public function subModules(): HasMany
    {
        return $this->hasMany(SubModule::class, 'module_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'module_id');
    }
}
