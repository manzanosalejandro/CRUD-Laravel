<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
class EstudianteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudiante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker=Faker::create("es_Es");

        return [
            "nombre"=>$faker->name,
            "dni"=>$faker->postcode,
            "direccion"=>$faker->address,
            "correo"=>$faker->email,
            "nombre_usuario"=>$faker->userName,
            "password"=>$faker->password,



            //
        ];
    }
}
