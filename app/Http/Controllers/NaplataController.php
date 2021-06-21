<?php

namespace App\Http\Controllers;

use App\Naplata;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NaplataController extends Controller
{


    public function dodajNaplatu(Request $request)
    {
        $naziv =  $request->input('naziv');
        $zabelezenoAt =  Carbon::now()->toDateTimeString();
        $studentID =  $request->input('id_student');
        $kolicina =  $request->input('kolicina');
        Naplata::insert([
            'naziv' => $naziv,
            'zabelezeno_at' => $zabelezenoAt,
            'student_id' => $studentID,
            'kolicina' => $kolicina,
        ]);
        Student::find($studentID)->increment('dugovanja', $kolicina);
        return view('pocetna');
    }

    public function deleteNaplatu(Request $request)
    {

        $naplataID = $request->input('id');

        $studentID = Naplata::find($naplataID)->student()->get()[0]->id;
        $naplata = Naplata::find($naplataID);
        Student::find($studentID)->decrement('dugovanja', $naplata->kolicina);

        Naplata::find($naplataID)->delete();
        return view('naplata', [
            'naplata' => $naplata,
            'studentID' => $studentID
        ]);
    }
}
