<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\City;
use App\Models\General\World\State;
use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $egypt = Country::where('name', 'Egypt')->first();
        $saudiArabia = Country::where('name', 'Saudi Arabia')->first();

        $states = State::all()->pluck('id', 'name')->toArray();

        City::insert([
            // Cities in Cairo, Egypt
            ['name' => 'Nasr City', 'code' => $egypt->code . '-CAI-NASR', 'short' => 'NASR', 'iso_code' => 'EG-CAI-001', 'state_id' => $states['Cairo'], 'country_id' => $egypt->id],
            ['name' => 'New Cairo', 'code' => $egypt->code . '-CAI-NEWC', 'short' => 'NEWC', 'iso_code' => 'EG-CAI-002', 'state_id' => $states['Cairo'], 'country_id' => $egypt->id],
            ['name' => 'Heliopolis', 'code' => $egypt->code . '-CAI-HELIO', 'short' => 'HELIO', 'iso_code' => 'EG-CAI-003', 'state_id' => $states['Cairo'], 'country_id' => $egypt->id],
            ['name' => 'Maadi', 'code' => $egypt->code . '-CAI-MAADI', 'short' => 'MAADI', 'iso_code' => 'EG-CAI-004', 'state_id' => $states['Cairo'], 'country_id' => $egypt->id],
            ['name' => 'Garden City', 'code' => $egypt->code . '-CAI-GARDEN', 'short' => 'GARDEN', 'iso_code' => 'EG-CAI-005', 'state_id' => $states['Cairo'], 'country_id' => $egypt->id],

            // Cities in Giza, Egypt
            ['name' => 'Haram', 'code' => $egypt->code . '-GIZ-HARAM', 'short' => 'HARAM', 'iso_code' => 'EG-GIZ-001', 'state_id' => $states['Giza'], 'country_id' => $egypt->id],
            ['name' => 'Faisal', 'code' => $egypt->code . '-GIZ-FAIS', 'short' => 'FAIS', 'iso_code' => 'EG-GIZ-002', 'state_id' => $states['Giza'], 'country_id' => $egypt->id],
            ['name' => '6th of October', 'code' => $egypt->code . '-GIZ-OCT6', 'short' => 'OCT6', 'iso_code' => 'EG-GIZ-003', 'state_id' => $states['Giza'], 'country_id' => $egypt->id],
            ['name' => 'Sheikh Zayed', 'code' => $egypt->code . '-GIZ-SHZ', 'short' => 'SHZ', 'iso_code' => 'EG-GIZ-004', 'state_id' => $states['Giza'], 'country_id' => $egypt->id],
            ['name' => 'Hawamdiya', 'code' => $egypt->code . '-GIZ-HAW', 'short' => 'HAW', 'iso_code' => 'EG-GIZ-005', 'state_id' => $states['Giza'], 'country_id' => $egypt->id],

            // Cities in Alexandria, Egypt
            ['name' => 'Mandara', 'code' => $egypt->code . '-ALX-MAND', 'short' => 'MAND', 'iso_code' => 'EG-ALX-001', 'state_id' => $states['Alexandria'], 'country_id' => $egypt->id],
            ['name' => 'Stanley', 'code' => $egypt->code . '-ALX-STAN', 'short' => 'STAN', 'iso_code' => 'EG-ALX-002', 'state_id' => $states['Alexandria'], 'country_id' => $egypt->id],
            ['name' => 'Smouha', 'code' => $egypt->code . '-ALX-SMH', 'short' => 'SMH', 'iso_code' => 'EG-ALX-003', 'state_id' => $states['Alexandria'], 'country_id' => $egypt->id],
            ['name' => 'Al Agami', 'code' => $egypt->code . '-ALX-AGAMI', 'short' => 'AGAMI', 'iso_code' => 'EG-ALX-004', 'state_id' => $states['Alexandria'], 'country_id' => $egypt->id],
            ['name' => 'Borg El Arab', 'code' => $egypt->code . '-ALX-BORG', 'short' => 'BORG', 'iso_code' => 'EG-ALX-005', 'state_id' => $states['Alexandria'], 'country_id' => $egypt->id],

            // Cities in Matruh, Egypt
            ['name' => 'Marsa Matruh', 'code' => $egypt->code . '-MTR-MARSA', 'short' => 'MARSA', 'iso_code' => 'EG-MTR-001', 'state_id' => $states['Matruh'], 'country_id' => $egypt->id],
            ['name' => 'Siwa', 'code' => $egypt->code . '-MTR-SIWA', 'short' => 'SIWA', 'iso_code' => 'EG-MTR-002', 'state_id' => $states['Matruh'], 'country_id' => $egypt->id],
            ['name' => 'Alamein', 'code' => $egypt->code . '-MTR-ALMN', 'short' => 'ALMN', 'iso_code' => 'EG-MTR-003', 'state_id' => $states['Matruh'], 'country_id' => $egypt->id],
            ['name' => 'New Alamein', 'code' => $egypt->code . '-MTR-NEWALMN', 'short' => 'NEWALMN', 'iso_code' => 'EG-MTR-004', 'state_id' => $states['Matruh'], 'country_id' => $egypt->id],

            // Cities in Aswan, Egypt
            ['name' => 'Aswan', 'code' => $egypt->code . '-ASN-ASN', 'short' => 'ASN', 'iso_code' => 'EG-ASN-001', 'state_id' => $states['Aswan'], 'country_id' => $egypt->id],
            ['name' => 'Edfu', 'code' => $egypt->code . '-ASN-EDF', 'short' => 'EDF', 'iso_code' => 'EG-ASN-002', 'state_id' => $states['Aswan'], 'country_id' => $egypt->id],
            ['name' => 'Kom Ombo', 'code' => $egypt->code . '-ASN-KOM', 'short' => 'KOM', 'iso_code' => 'EG-ASN-003', 'state_id' => $states['Aswan'], 'country_id' => $egypt->id],
            ['name' => 'Daraw', 'code' => $egypt->code . '-ASN-DRW', 'short' => 'DRW', 'iso_code' => 'EG-ASN-004', 'state_id' => $states['Aswan'], 'country_id' => $egypt->id],
            ['name' => 'Nasr Nubia', 'code' => $egypt->code . '-ASN-NN', 'short' => 'NN', 'iso_code' => 'EG-ASN-005', 'state_id' => $states['Aswan'], 'country_id' => $egypt->id],

            // Cities in Riyadh, Saudi Arabia
            ['name' => 'Riyadh', 'code' => $saudiArabia->code . '-RYD-RYD', 'short' => 'RYD', 'iso_code' => 'SA-RYD-001', 'state_id' => $states['Riyadh'], 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Kharj', 'code' => $saudiArabia->code . '-RYD-AKH', 'short' => 'AKH', 'iso_code' => 'SA-RYD-002', 'state_id' => $states['Riyadh'], 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Muzahmiyah', 'code' => $saudiArabia->code . '-RYD-AMZ', 'short' => 'AMZ', 'iso_code' => 'SA-RYD-003', 'state_id' => $states['Riyadh'], 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Ghat', 'code' => $saudiArabia->code . '-RYD-AGH', 'short' => 'AGH', 'iso_code' => 'SA-RYD-004', 'state_id' => $states['Riyadh'], 'country_id' => $saudiArabia->id],

            // Cities in Mecca, Saudi Arabia
            ['name' => 'Mecca', 'code' => $saudiArabia->code . '-MCC-MCC', 'short' => 'MCC', 'iso_code' => 'SA-MCC-001', 'state_id' => $states['Mecca'], 'country_id' => $saudiArabia->id],
            ['name' => 'Jeddah', 'code' => $saudiArabia->code . '-MCC-JED', 'short' => 'JED', 'iso_code' => 'SA-MCC-002', 'state_id' => $states['Mecca'], 'country_id' => $saudiArabia->id],
            ['name' => 'Taif', 'code' => $saudiArabia->code . '-MCC-TAI', 'short' => 'TAI', 'iso_code' => 'SA-MCC-003', 'state_id' => $states['Mecca'], 'country_id' => $saudiArabia->id],
            ['name' => 'Rabigh', 'code' => $saudiArabia->code . '-MCC-RAB', 'short' => 'RAB', 'iso_code' => 'SA-MCC-004', 'state_id' => $states['Mecca'], 'country_id' => $saudiArabia->id],

            // Cities in Medina, Saudi Arabia
            ['name' => 'Medina', 'code' => $saudiArabia->code . '-MED-MED', 'short' => 'MED', 'iso_code' => 'SA-MED-001', 'state_id' => $states['Medina'], 'country_id' => $saudiArabia->id],
            ['name' => 'Yanbu', 'code' => $saudiArabia->code . '-MED-YAN', 'short' => 'YAN', 'iso_code' => 'SA-MED-002', 'state_id' => $states['Medina'], 'country_id' => $saudiArabia->id],
            ['name' => 'Al-Ula', 'code' => $saudiArabia->code . '-MED-ULA', 'short' => 'ULA', 'iso_code' => 'SA-MED-003', 'state_id' => $states['Medina'], 'country_id' => $saudiArabia->id],
            ['name' => 'Badr', 'code' => $saudiArabia->code . '-MED-BAD', 'short' => 'BAD', 'iso_code' => 'SA-MED-004', 'state_id' => $states['Medina'], 'country_id' => $saudiArabia->id],

            // Cities in Eastern Province, Saudi Arabia
            ['name' => 'Dammam', 'code' => $saudiArabia->code . '-EP-DAM', 'short' => 'DAM', 'iso_code' => 'SA-EP-001', 'state_id' => $states['Eastern Province'], 'country_id' => $saudiArabia->id],
            ['name' => 'Khobar', 'code' => $saudiArabia->code . '-EP-KHO', 'short' => 'KHO', 'iso_code' => 'SA-EP-002', 'state_id' => $states['Eastern Province'], 'country_id' => $saudiArabia->id],
            ['name' => 'Dhahran', 'code' => $saudiArabia->code . '-EP-DHR', 'short' => 'DHR', 'iso_code' => 'SA-EP-003', 'state_id' => $states['Eastern Province'], 'country_id' => $saudiArabia->id],
            ['name' => 'Qatif', 'code' => $saudiArabia->code . '-EP-QAT', 'short' => 'QAT', 'iso_code' => 'SA-EP-004', 'state_id' => $states['Eastern Province'], 'country_id' => $saudiArabia->id],

            // Additional cities for other states...
        ]);
    }
}
