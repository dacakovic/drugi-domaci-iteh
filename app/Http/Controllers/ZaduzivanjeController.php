<?php

namespace App\Http\Controllers;

use App\Student;
use App\Zaduzivanje;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ZaduzivanjeController extends Controller
{


    public function dodajZaduzivanje(Request $request)
    {
        $naziv =  $request->input('naziv');
        $zabelezenoAt =  Carbon::now()->toDateTimeString();
        $studentID =  $request->input('id_student');
        $kolicina =  $request->input('kolicina');
        Zaduzivanje::insert([
            'naziv' => $naziv,
            'zabelezeno_at' => $zabelezenoAt,
            'student_id' => $studentID,
            'kolicina' => $kolicina,
        ]);
        Student::find($studentID)->decrement('dugovanja', $kolicina);
        return view('pocetna');
    }

    public function deleteZaduzivanje(Request $request)
    {
        $zaduzivanjeID = $request->input('id');
        $studentID = Zaduzivanje::find($zaduzivanjeID)->student()->get()[0]->id;
        $zaduzivanje = Zaduzivanje::find($zaduzivanjeID);

        Student::find($studentID)->increment('dugovanja', $zaduzivanje->kolicina);

        Zaduzivanje::find($zaduzivanjeID)->delete();
        return view('zaduzivanje', [
            'zaduzivanje' => $zaduzivanje,
            'studentID' => $studentID
        ]);
    }
}
