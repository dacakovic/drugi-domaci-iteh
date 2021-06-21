<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {
            DB::table('student')->insert([
                'ime' => Str::random(10),
                'broj_telefona' => $this->pocetniBroj() . " " . strval(rand(100000, 999999)),

            ]);
        }
    }

    public function pocetniBroj()
    {
        return "06" . rand(1, 9);
    }
}
