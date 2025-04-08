<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'HACK142';
    $logo = asset('logo.png'); 

    return view('welcome', ['title' => $title, 'logo' => $logo,]); 
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

Route::get('/i-nostri-corsi', function(){
    
    $p1 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique nesciunt eius fuga facilis? Illo voluptatum eveniet tempora aliquam minus magnam cum quasi distinctio, quo atque, quia, sunt eligendi qui?';
    $p2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique nesciunt eius fuga facilis? Illo voluptatum eveniet tempora aliquam minus magnam cum quasi distinctio, quo atque, quia, sunt eligendi qui?';
    $p3 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique nesciunt eius fuga facilis? Illo voluptatum eveniet tempora aliquam minus magnam cum quasi distinctio, quo atque, quia, sunt eligendi qui?';
    $p4 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique nesciunt eius fuga facilis? Illo voluptatum eveniet tempora aliquam minus magnam cum quasi distinctio, quo atque, quia, sunt eligendi qui?';
    $logo = asset('logo.png');
    $analyst = asset('analyst.png');
    $ai = asset('ai.png');
    $design = asset('design.png');
    $web = asset('web.png');

    return view('iNostriCorsi', ['logo' => $logo, 'analyst' => $analyst, 'ai' => $ai, 'design' => $design, 'web' => $web, 'p1' => $p1, 'p2' => $p2, 'p3' => $p3, 'p4' => $p4,]);
});

Route::get('/data-analyst', function(){
    $subtitle = 'Corso Data Analyst';
    $logo = asset('logo.png');
    $analyst = asset('analyst.png');
    $pAnalyst = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore tempora magni omnis, accusamus odit, explicabo laborum nemo sequi voluptatum porro obcaecati quae tenetur repellendus quas inventore aut debitis expedita. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, sit. Est, enim consequatur? Odit soluta blanditiis architecto repudiandae eligendi, ex assumenda sapiente, a sed voluptatem vel adipisci aliquam cupiditate ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore, fugiat earum quisquam, enim tenetur vitae a nemo voluptatum repellat ipsa consequuntur. Temporibus commodi consequuntur dolorem exercitationem laboriosam iste reprehenderit.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, impedit id veniam earum corporis voluptate odio accusamus provident voluptates, magni ducimus dolorem officia aut totam inventore ab numquam ex!';

    return view('dataAnalyst', ['subtitle' => $subtitle, 'logo' => $logo, 'analyst' => $analyst, 'pAnalyst' => $pAnalyst]);
});

Route::get('/i-a', function(){
    $subtitle = 'Corso Intellgenza Artificiale';
    $logo = asset('logo.png');
    $ia = asset('ai.png');
    $pIa = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore tempora magni omnis, accusamus odit, explicabo laborum nemo sequi voluptatum porro obcaecati quae tenetur repellendus quas inventore aut debitis expedita. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, sit. Est, enim consequatur? Odit soluta blanditiis architecto repudiandae eligendi, ex assumenda sapiente, a sed voluptatem vel adipisci aliquam cupiditate ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore, fugiat earum quisquam, enim tenetur vitae a nemo voluptatum repellat ipsa consequuntur. Temporibus commodi consequuntur dolorem exercitationem laboriosam iste reprehenderit.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, impedit id veniam earum corporis voluptate odio accusamus provident voluptates, magni ducimus dolorem officia aut totam inventore ab numquam ex!';

    return view('iA', ['subtitle' => $subtitle, 'logo' => $logo, 'ia' => $ia, 'pIa' => $pIa]);
});

Route::get('/design', function(){
    $subtitle = 'Corso UX/UI Design';
    $logo = asset('logo.png');
    $design = asset('design.png');
    $pDesign = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore tempora magni omnis, accusamus odit, explicabo laborum nemo sequi voluptatum porro obcaecati quae tenetur repellendus quas inventore aut debitis expedita. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, sit. Est, enim consequatur? Odit soluta blanditiis architecto repudiandae eligendi, ex assumenda sapiente, a sed voluptatem vel adipisci aliquam cupiditate ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore, fugiat earum quisquam, enim tenetur vitae a nemo voluptatum repellat ipsa consequuntur. Temporibus commodi consequuntur dolorem exercitationem laboriosam iste reprehenderit.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, impedit id veniam earum corporis voluptate odio accusamus provident voluptates, magni ducimus dolorem officia aut totam inventore ab numquam ex!';

    return view('design', ['subtitle' => $subtitle, 'logo' => $logo, 'design' => $design, 'pDesign' => $pDesign]);
});


Route::get('/web-developer', function(){
    $subtitle = 'Corso /Web Developer';
    $logo = asset('logo.png');
    $web = asset('web.png');
    $pWeb = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore tempora magni omnis, accusamus odit, explicabo laborum nemo sequi voluptatum porro obcaecati quae tenetur repellendus quas inventore aut debitis expedita. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, sit. Est, enim consequatur? Odit soluta blanditiis architecto repudiandae eligendi, ex assumenda sapiente, a sed voluptatem vel adipisci aliquam cupiditate ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore, fugiat earum quisquam, enim tenetur vitae a nemo voluptatum repellat ipsa consequuntur. Temporibus commodi consequuntur dolorem exercitationem laboriosam iste reprehenderit.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, impedit id veniam earum corporis voluptate odio accusamus provident voluptates, magni ducimus dolorem officia aut totam inventore ab numquam ex!';

    return view('web-developer', ['subtitle' => $subtitle, 'logo' => $logo, 'web' => $web, 'pWeb' => $pWeb]);
});
