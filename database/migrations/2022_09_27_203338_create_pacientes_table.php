<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('nacimiento');
            $table->string('correo');
            $table->string('telefono');
            $table->string('genero');
            $table->string('pronombre');
            $table->string('orientacion');
            $table->string('ocupacion');
            $table->string('edocivil');
            $table->string('nacionalidad');
            $table->string('resactual');
            $table->string('resanterior');
            $table->string('estudios');
            $table->text('motivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
