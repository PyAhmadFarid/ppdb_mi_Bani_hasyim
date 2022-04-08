<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'jenis_pendaftaran' => 'baru',
            'jalur_pendaftaran' => 'Umum',
            'jenis_kelamin' => $gender == 'male'?'L':'P',
            'nama_lengkap' => $this->faker->name($gender),
            'nik'=>$this->faker->numerify('##########'),
            'tempat_lahir'=>$this->faker->city(),
            'tanggal_lahir'=>$this->faker->date(),
            'agama'=>'icelamp',
            'alamat_jalan'=>$this->faker->address(),
            'kabupaten'=>$this->faker->city(),
            'nomor_hp'=>$this->faker->phoneNumber(),
            'kewarganegaraan'=>$this->faker->country(),
            'nama_ayah'=>$this->faker->name('male'),
            'nama_ibu'=>$this->faker->name('female'),
            'pernyataan'=>true,
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-10 years',$endDate = 'now')

        ];
    }
}
