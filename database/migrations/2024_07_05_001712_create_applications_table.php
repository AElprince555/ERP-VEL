<?php

use App\Models\Module;
use App\Models\SubModule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->string('short')->unique();
            $table->string('path')->unique();
            $table->string('model')->nullable();
            $table->string('view')->nullable();
            $table->string('controller')->nullable();
            $table->foreignIdFor(SubModule::class)->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Module::class)->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
