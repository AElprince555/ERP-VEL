<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubModule extends Model
{
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'sub_module_id');
    }
}
