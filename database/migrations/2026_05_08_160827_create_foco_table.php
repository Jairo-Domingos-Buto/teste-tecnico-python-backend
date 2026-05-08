<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("focos", function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("nivel_foco")->unsigned()->comment("Intervalo de 1 a 5");
            $table->integer("tempo_minutos")->unsigned()->comment("Tempo da sessão de foco");
            $table->text("observacoes")->nullable()->comment("Observações da sessão de foco");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("foco");
    }
};
