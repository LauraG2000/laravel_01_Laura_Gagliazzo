<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $title = 'HACK142';
        $logo = asset('logo.png');
        return view('welcome', ['title' => $title, 'logo' => $logo]);
    }

    public function chiSiamo() {
        $arrayTeachers = [
            ['name'=> 'Giulio' , 'surname' => htmlspecialchars('Rossi:'), 'testo' => 'Insegnante Front-end'],
            ['name'=>'Anna' , 'surname' => htmlspecialchars('Verdi:'), 'testo' => 'Insegnante Back-end'],
            ['name'=>'Michela' , 'surname' => htmlspecialchars('Bianchi:'), 'testo' => 'Insegnante Front-end'],
            ['name'=>'Luca' , 'surname' => htmlspecialchars('Esposito:'), 'testo' => 'Insegnante Back-end'],
        ];

        $logo = asset('logo.png'); 
        $team = asset('team.png');

        return view('chiSiamo', ['teachers' => $arrayTeachers, 'logo' => $logo, 'team' => $team]);
    }

    public function doveCiTroviamo() {
        $title = 'Dove ci troviamo';
        $logo = asset('logo.png'); 
        $location = asset('location.png');
        $loc = asset('loc.png');
        $number = asset('number.png');
        $mail = asset('mail.png');

        return view('doveCiTroviamo', [
            'titolo' => $title, 
            'logo' => $logo, 
            'location' => $location, 
            'loc' => $loc, 
            'number' => $number, 
            'mail' => $mail
        ]);
    }
}

