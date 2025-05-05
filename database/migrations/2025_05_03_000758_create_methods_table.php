<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 12);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('methods');
    }
};
