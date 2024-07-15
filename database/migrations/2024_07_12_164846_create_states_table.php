<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
$table->string('name');
$table->string('code');
$table->string('short');
$table->string('iso_code')->nullable();
$table->unsignedBigInteger('country_id');
$table->timestamps();//
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
