<?php

use App\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ZaduzivanjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            $studentID = rand(1, 6);
            $kolicina = rand(5, 12) * 10 + rand(0, 1) * 5;
            DB::table('zaduzivanje')->insert([
                'naziv' => Str::random(10),
                'zabelezeno_at' => Carbon::now()->toDateTimeString(),
                'student_id' => $studentID,
                'kolicina' => $kolicina
            ]);
            Student::find($studentID)->decrement('dugovanja', $kolicina);
        }
    }
}
