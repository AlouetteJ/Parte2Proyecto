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
            $table->string('nombre');
            $table->string('apellidos');
            $table->smallInteger('edad')->unsigned();
            $table->date('nacimiento');
            $table->string('correo');
            $table->string('telefono',10);
            $table->string('genero',10);
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
