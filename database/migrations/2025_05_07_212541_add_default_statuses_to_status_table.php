<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Status; // Importe o Model Status

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Inserir os valores padrão na tabela 'status'
        Status::create(['nome' => 'Ativo']);
        Status::create(['nome' => 'Inativo']);
        Status::create(['nome' => 'Potencial']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('status', function (Blueprint $table) {
            //
        });
    }
};
