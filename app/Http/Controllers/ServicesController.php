<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function iNostriCorsi() {
        $p1 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';
        $p2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';
        $p3 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';
        $p4 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';
        $logo = asset('logo.png');
        $analyst = asset('analyst.png');
        $ai = asset('ai.png');
        $design = asset('design.png');
        $web = asset('web.png');

        return view('iNostriCorsi', [
            'logo' => $logo, 
            'analyst' => $analyst, 
            'ai' => $ai, 
            'design' => $design, 
            'web' => $web, 
            'p1' => $p1, 
            'p2' => $p2, 
            'p3' => $p3, 
            'p4' => $p4
        ]);
    }

    public function dataAnalyst() {
        $subtitle = 'Corso Data Analyst';
        $logo = asset('logo.png');
        $analyst = asset('analyst.png');
        $pAnalyst = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';

        return view('dataAnalyst', ['subtitle' => $subtitle, 'logo' => $logo, 'analyst' => $analyst, 'pAnalyst' => $pAnalyst]);
    }

    public function iA() {
        $subtitle = 'Corso Intelligenza Artificiale';
        $logo = asset('logo.png');
        $ia = asset('ai.png');
        $pIa = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';

        return view('iA', ['subtitle' => $subtitle, 'logo' => $logo, 'ia' => $ia, 'pIa' => $pIa]);
    }

    public function design() {
        $subtitle = 'Corso UX/UI Design';
        $logo = asset('logo.png');
        $design = asset('design.png');
        $pDesign = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';

        return view('design', ['subtitle' => $subtitle, 'logo' => $logo, 'design' => $design, 'pDesign' => $pDesign]);
    }

    public function webDeveloper() {
        $subtitle = 'Corso Web Developer';
        $logo = asset('logo.png');
        $web = asset('web.png');
        $pWeb = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel non dolore corporis doloribus ad minima deserunt delectus expedita voluptatem nam veritatis molestias harum earum aliquam nemo, sequi, accusamus quas?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nam delectus praesentium dolorum dolore fugit vero est placeat. Voluptas quisquam nihil maiores vero eum a minima officiis officia temporibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quasi quo at. Officiis temporibus adipisci expedita corrupti hic dignissimos quasi reiciendis, quidem illum dicta accusantium cum debitis veritatis magnam atque!';

        return view('web-developer', ['subtitle' => $subtitle, 'logo' => $logo, 'web' => $web, 'pWeb' => $pWeb]);
    }
}
