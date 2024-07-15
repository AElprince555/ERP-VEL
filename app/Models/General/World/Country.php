<?php

namespace App\Models\General\World;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
 protected $fillable = [
        'name',
        'code',
        'short',
        'iso_code',
    ];
    public  function application(): Application
    {
        return Application::firstWhere('code','G-WO-COU');
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_id');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'country_id');
    }
}
