<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $a=['Hombre', 'Mujer','Otro'];
        $b=['Ella', 'El','Elle'];
        $c=['Heterosexual', 'Gay','Lesbiana'];
        $d=['Ama de casa', 'Estudiante','Trabajador'];
        $e=['Soltero', 'Casado','Viudo','Union Libre','Divorciado'];
        $f=['Mexicana', 'Colombiano','Venelozano','Chileno','Peruano'];
        $g=['Primaria', 'Secundaria','Preparatoria','Universidad','Maestria','Doctorado'];

        return [
            'user_id' => $this->faker->numberBetween(1, \App\Models\User::all()->count()),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'nacimiento'=> $this->faker->date(),
            'correo' => $this->faker->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'genero' => $a[rand(0,count($a)-1)],
            'pronombre' => $b[rand(0,count($b)-1)],
            'orientacion' => $c[rand(0,count($c)-1)],
            'ocupacion' => $d[rand(0,count($d)-1)],
            'edocivil' => $e[rand(0,count($e)-1)],
            'resactual' => $this->faker->city(),
            'resanterior' => $this->faker->city(),
            'nacionalidad' => $f[rand(0,count($f)-1)],
            'estudios' => $g[rand(0,count($g)-1)],
            'motivo' => $this->faker->text(),
        ];
    }
}
