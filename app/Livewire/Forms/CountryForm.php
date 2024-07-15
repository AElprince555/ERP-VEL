<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CountryForm extends Form
{
    public $id;
    public $name;
    public $code;
    public $short;
    public $iso_code;
    public function rules(): array
    {
        return [
            'name' => ['required','string',Rule::unique('countries','name')->ignore($this->id)],
            'code' => ['required','string',Rule::unique('countries','name')->ignore($this->id)],
            'iso_code' => ['nullable','string',Rule::unique('countries','name')->ignore($this->id)],
            'short' => ['required','string',Rule::unique('countries','name')->ignore($this->id)],
        ];
    }
}
