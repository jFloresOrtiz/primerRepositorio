<?php

namespace Database\Seeders;
use App\Models\Curso;

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $curso = new Curso();

        $curso->name="programacion";
        $curso->description="paasdasdasdasd";
        $curso->category="tecnology";
        $curso->save();

        $curso2 = new Curso();

        $curso2->name="IA";
        $curso2->description="paasdasdasdasdasdasdasd";
        $curso2->category="tecnology";
        $curso2->save();

        $curso3 = new Curso();

        $curso3->name="matematica";
        $curso3->description="paasdasdasdasd";
        $curso3->category="escuela";
        $curso3->save();*/

        Curso::factory(50)->create();
    }
}
