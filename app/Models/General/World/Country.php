<?php

namespace App\Models\General\World;

    use Illuminate\Database\Eloquent\Model;

    class Country extends Model {
        protected $fillable = [
        'name',
        'code',
        'short',
        'iso_code',
        ];
    }
