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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Coluna ID (chave primária auto-incrementável)
            $table->string('nome_completo'); // Coluna para o nome completo
            $table->string('email')->unique(); // Coluna para o email (único)
            $table->string('telefone')->nullable(); // Coluna para o telefone (pode ser nulo)

            // Coluna para a chave estrangeira status_id com valor padrão e constraint
            $table->foreignId('status_id')
                  ->default(3) // Define o valor padrão como 3
                  ->constrained('status') // Cria a chave estrangeira referenciando a tabela 'status'
                  ->onDelete('set default'); // Opcional: Ao deletar um status, define status_id para o valor padrão

            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
