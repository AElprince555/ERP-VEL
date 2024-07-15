<?php

namespace App\Livewire\Forms;

    use Livewire\Attributes\Validate;
    use Livewire\Form;

    class CountryForm extends Form {
        #[Validate(['required'])]
        public $name = '';

        #[Validate(['required'])]
        public $code = '';

        #[Validate(['required'])]
        public $short = '';

        #[Validate(['nullable'])]
        public $iso_code = '';
    }
