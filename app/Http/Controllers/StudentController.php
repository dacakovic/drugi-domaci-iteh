<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loadStudente()
    {
        $studenti = Student::all();

        return response()->json([
            'studenti' => $studenti
        ]);
    }

    public function prikaziStudenta(Request $request)
    {
        $studentID = $request->input('id_student');

        $naplate = $this->loadNaplate($studentID);
        $zaduzivanja = $this->loadZaduzivanja($studentID);

        return view('dugovanja', [
            'naplate' => $naplate,
            "zaduzivanja" => $zaduzivanja

        ]);
    }

    private function loadNaplate($studentID)
    {
        $sveNaplate = Student::find($studentID)->naplateStudenta()->get();

        return $sveNaplate;
    }
    private function loadZaduzivanja($studentID)
    {
        $svaZaduzivanja = Student::find($studentID)->zaduzivanjaStudenta()->get();

        return $svaZaduzivanja;
    }
}
