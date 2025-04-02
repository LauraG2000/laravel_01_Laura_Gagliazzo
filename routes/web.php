<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'HACK142';
    $logo = asset('logo.png'); 
    $pc = asset('pc.png');

    return view('welcome', ['titolo' => $title, 'logo' => $logo, 'pc' => $pc]); 
});

Route::get('/chi-siamo', function(){
    $arrayTeachers = [
        ['name'=> 'Giulio' , 'surname' => htmlspecialchars('Rossi:'), 'testo' => 'Insegnante Front-end'],
        ['name'=>'Anna' , 'surname' => htmlspecialchars('Verdi:'), 'testo' => 'Insegnante Back-end'],
        ['name'=>'Michela' , 'surname' => htmlspecialchars('Bianchi:'), 'testo' => 'Insegnante Front-end'],
        ['name'=>'Luca' , 'surname' => htmlspecialchars('Esposito:'), 'testo' => 'Insegnante Back-end'],
    ];
    
    $logo = asset('logo.png'); 
    $team = asset('team.png');

    return view('chiSiamo' , ['teachers' => $arrayTeachers, 'logo' => $logo, 'team' => $team]);
});

Route::get('/dove-ci-troviamo', function(){
    $title = 'Dove ci troviamo';
    $logo = asset('logo.png'); 
    $location = asset('location.png');
    $loc = asset('loc.png');
    $number = asset('number.png');
    $mail = asset('mail.png');

    return view('doveCiTroviamo', ['titolo' => $title, 'logo' => $logo, 'location' => $location, 'loc' => $loc, 'number' => $number, 'mail' => $mail, ]);
});


