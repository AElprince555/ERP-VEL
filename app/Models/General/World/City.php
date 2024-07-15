<?php

namespace App\Models\General\World;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class City extends Model {
        use HasFactory;

        protected $fillable = [
        'name',
        'code',
        'short',
        'iso_code',
        'state_id',
        'country_id',
        ];
    }
