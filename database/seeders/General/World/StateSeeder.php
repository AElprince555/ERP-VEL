<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\State;
use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $egypt = Country::where('name', 'Egypt')->first();
        $saudiArabia = Country::where('name', 'Saudi Arabia')->first();

        State::insert([
            // States in Egypt
            ['name' => 'Cairo', 'code' => $egypt->code . '-CAI', 'short' => 'CAI', 'iso_code' => 'EG-C', 'country_id' => $egypt->id],
            ['name' => 'Giza', 'code' => $egypt->code . '-GIZ', 'short' => 'GIZ', 'iso_code' => 'EG-GZ', 'country_id' => $egypt->id],
            ['name' => 'Alexandria', 'code' => $egypt->code . '-ALX', 'short' => 'ALX', 'iso_code' => 'EG-ALX', 'country_id' => $egypt->id],
            ['name' => 'Matruh', 'code' => $egypt->code . '-MTR', 'short' => 'MTR', 'iso_code' => 'EG-MT', 'country_id' => $egypt->id],
            ['name' => 'Aswan', 'code' => $egypt->code . '-ASN', 'short' => 'ASN', 'iso_code' => 'EG-ASN', 'country_id' => $egypt->id],
            ['name' => 'Asyut', 'code' => $egypt->code . '-AST', 'short' => 'AST', 'iso_code' => 'EG-AST', 'country_id' => $egypt->id],
            ['name' => 'Beheira', 'code' => $egypt->code . '-BEH', 'short' => 'BEH', 'iso_code' => 'EG-BH', 'country_id' => $egypt->id],
            ['name' => 'Beni Suef', 'code' => $egypt->code . '-BEN', 'short' => 'BEN', 'iso_code' => 'EG-BNS', 'country_id' => $egypt->id],
            ['name' => 'Dakahlia', 'code' => $egypt->code . '-DAK', 'short' => 'DAK', 'iso_code' => 'EG-DK', 'country_id' => $egypt->id],
            ['name' => 'Damietta', 'code' => $egypt->code . '-DAM', 'short' => 'DAM', 'iso_code' => 'EG-DT', 'country_id' => $egypt->id],
            ['name' => 'Faiyum', 'code' => $egypt->code . '-FAI', 'short' => 'FAI', 'iso_code' => 'EG-FYM', 'country_id' => $egypt->id],
            ['name' => 'Gharbia', 'code' => $egypt->code . '-GHA', 'short' => 'GHA', 'iso_code' => 'EG-GH', 'country_id' => $egypt->id],
            ['name' => 'Ismailia', 'code' => $egypt->code . '-ISM', 'short' => 'ISM', 'iso_code' => 'EG-IS', 'country_id' => $egypt->id],
            ['name' => 'Kafr El Sheikh', 'code' => $egypt->code . '-KFS', 'short' => 'KFS', 'iso_code' => 'EG-KFS', 'country_id' => $egypt->id],
            ['name' => 'Luxor', 'code' => $egypt->code . '-LUX', 'short' => 'LUX', 'iso_code' => 'EG-LX', 'country_id' => $egypt->id],
            ['name' => 'Minya', 'code' => $egypt->code . '-MIN', 'short' => 'MIN', 'iso_code' => 'EG-MN', 'country_id' => $egypt->id],
            ['name' => 'Monufia', 'code' => $egypt->code . '-MON', 'short' => 'MON', 'iso_code' => 'EG-MNF', 'country_id' => $egypt->id],
            ['name' => 'New Valley', 'code' => $egypt->code . '-NV', 'short' => 'NV', 'iso_code' => 'EG-WAD', 'country_id' => $egypt->id],
            ['name' => 'North Sinai', 'code' => $egypt->code . '-NS', 'short' => 'NS', 'iso_code' => 'EG-SIN', 'country_id' => $egypt->id],
            ['name' => 'Port Said', 'code' => $egypt->code . '-PTS', 'short' => 'PTS', 'iso_code' => 'EG-PTS', 'country_id' => $egypt->id],
            ['name' => 'Qalyubia', 'code' => $egypt->code . '-QAL', 'short' => 'QAL', 'iso_code' => 'EG-KB', 'country_id' => $egypt->id],
            ['name' => 'Qena', 'code' => $egypt->code . '-QEN', 'short' => 'QEN', 'iso_code' => 'EG-KN', 'country_id' => $egypt->id],
            ['name' => 'Red Sea', 'code' => $egypt->code . '-RS', 'short' => 'RS', 'iso_code' => 'EG-BA', 'country_id' => $egypt->id],
            ['name' => 'Sharqia', 'code' => $egypt->code . '-SHA', 'short' => 'SHA', 'iso_code' => 'EG-SHR', 'country_id' => $egypt->id],
            ['name' => 'Sohag', 'code' => $egypt->code . '-SOH', 'short' => 'SOH', 'iso_code' => 'EG-SHG', 'country_id' => $egypt->id],
            ['name' => 'South Sinai', 'code' => $egypt->code . '-SS', 'short' => 'SS', 'iso_code' => 'EG-JS', 'country_id' => $egypt->id],
            ['name' => 'Suez', 'code' => $egypt->code . '-SUE', 'short' => 'SUE', 'iso_code' => 'EG-SUZ', 'country_id' => $egypt->id],

            // States in Saudi Arabia
            ['name' => 'Riyadh', 'code' => $saudiArabia->code . '-RYD', 'short' => 'RYD', 'iso_code' => 'SA-01', 'country_id' => $saudiArabia->id],
            ['name' => 'Mecca', 'code' => $saudiArabia->code . '-MCC', 'short' => 'MCC', 'iso_code' => 'SA-02', 'country_id' => $saudiArabia->id],
            ['name' => 'Medina', 'code' => $saudiArabia->code . '-MED', 'short' => 'MED', 'iso_code' => 'SA-03', 'country_id' => $saudiArabia->id],
            ['name' => 'Eastern Province', 'code' => $saudiArabia->code . '-EP', 'short' => 'EP', 'iso_code' => 'SA-04', 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Qassim', 'code' => $saudiArabia->code . '-QSM', 'short' => 'QSM', 'iso_code' => 'SA-05', 'country_id' => $saudiArabia->id],
            ['name' => 'Ha\'il', 'code' => $saudiArabia->code . '-HAI', 'short' => 'HAI', 'iso_code' => 'SA-06', 'country_id' => $saudiArabia->id],
            ['name' => 'Tabuk', 'code' => $saudiArabia->code . '-TAB', 'short' => 'TAB', 'iso_code' => 'SA-07', 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Baha', 'code' => $saudiArabia->code . '-BAH', 'short' => 'BAH', 'iso_code' => 'SA-08', 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Jawf', 'code' => $saudiArabia->code . '-JAW', 'short' => 'JAW', 'iso_code' => 'SA-09', 'country_id' => $saudiArabia->id],
            ['name' => 'Jizan', 'code' => $saudiArabia->code . '-JIZ', 'short' => 'JIZ', 'iso_code' => 'SA-10', 'country_id' => $saudiArabia->id],
            ['name' => 'Najran', 'code' => $saudiArabia->code . '-NAJ', 'short' => 'NAJ', 'iso_code' => 'SA-11', 'country_id' => $saudiArabia->id],
            ['name' => 'Asir', 'code' => $saudiArabia->code . '-ASR', 'short' => 'ASR', 'iso_code' => 'SA-12', 'country_id' => $saudiArabia->id],
            ['name' => 'Northern Borders', 'code' => $saudiArabia->code . '-NB', 'short' => 'NB', 'iso_code' => 'SA-13', 'country_id' => $saudiArabia->id],
        ]);
    }
}
