<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('condenas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ladrones_id')->constrained('ladrones');
            $table->integer('annos_condena')->nullable();
            $table->decimal('multa_economica', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condenas');
    }
};
