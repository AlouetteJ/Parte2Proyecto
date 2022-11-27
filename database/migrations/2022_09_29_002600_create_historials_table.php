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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->text('motivos')->nullable();
            $table->string('peso')->nullable();
            $table->string('estatura')->nullable();
            $table->string('complexion')->nullable();
            $table->string('tez')->nullable();
            $table->string('alerta')->nullable();
            $table->string('marcha')->nullable();
            $table->text('vestimenta')->nullable();
            $table->text('accesorios')->nullable();
            $table->text('cicatrices')->nullable();
            $table->text('lesiones')->nullable();
            $table->text('cabeza')->nullable();
            $table->text('orejas')->nullable();
            $table->text('ojos')->nullable();
            $table->text('nariz')->nullable();
            $table->text('boca')->nullable();
            $table->text('cabello')->nullable();
            $table->text('cejas')->nullable();
            $table->text('mandibula')->nullable();
            $table->text('cuello')->nullable();
            $table->text('dientes')->nullable();
            // Familia
            $table->string('padre')->nullable();
            $table->string('padrevive')->nullable();
            $table->string('madre')->nullable();
            $table->string('madrevive')->nullable();
            $table->string('hermano')->nullable();
            $table->smallInteger('hermanos')->unsigned()->default(0)->nullable();
            $table->string('hermana')->nullable();
            $table->smallInteger('hermanas')->unsigned()->default(0)->nullable();
            $table->string('hijo')->nullable();
            $table->smallInteger('hijos')->unsigned()->default(0)->nullable();
            $table->string('hija')->nullable();
            $table->smallInteger('hijas')->unsigned()->default(0)->nullable();
            $table->smallInteger('numerohijo')->unsigned()->default(0)->nullable();
            $table->text('vive')->nullable();
            // Antecedentes enfermedades
            $table->json('enf_actuales')->nullable();
            // Enfermedades infancia
            $table->text('infancia')->nullable();
            // Enfermedades familiares
            $table->json('enf_fam')->nullable();
            // Antecedentes personales
            $table->text('habitos')->nullable();
            $table->text('alcohol')->nullable();
            $table->text('drogas')->nullable();
            $table->text('alimentacion')->nullable();
            $table->text('sueño')->nullable();
            // Pruebas
            $table->text('pruebas')->nullable();
            $table->text('pruebas_aplicadas')->nullable();
            //Diagnostico
            $table->text('diagnostico')->nullable();
            $table->text('anotaciones')->nullable();
            $table->text('pronostico')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historials');
    }
};
