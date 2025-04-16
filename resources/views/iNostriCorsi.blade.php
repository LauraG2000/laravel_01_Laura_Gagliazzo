<x-layout>

<!-- Contenuto -->
<header>
    <div class="container text-center background2"> 
        <div class="row row-customize">
            <div class="col col-12 col-md-6 col-custom">
                <img class="icon-custom" src="{{ $analyst }}" alt="analyst">
                <h5 class="title2">Corso Data Analyst</h5> 
                <p class= "p-custom">{{  $p1  }}</p>
                <button class= "button-custom2"><a class= "a-style a-custom" href="/data-analyst">Apri</a></button>
            </div>
            <div class="col col-12 col-md-6 col-custom">
                <img class="icon-custom" src="{{ $ai }}" alt="ai">
                <h5 class="title2">Corso Intelligenza Artificiale</h5>
                <p class= "p-custom">{{  $p2  }}</p>
                <button class= "button-custom2"><a class= "a-style a-custom" href="/i-a">Apri</a></button>
            </div>
            <div class="col col-12 col-md-6 col-custom">
                <img class="icon-custom" src="{{ $design }}" alt="design">
                <h5 class="title2">Corso UX/UI Design</h5>
                <p class= "p-custom">{{  $p3  }}</p>
                <button class= "button-custom2"><a class= "a-style a-custom" href="/design">Apri</a></button>
            </div>
            <div class="col col-12 col-md-6 col-custom">
                <img class="icon-custom" src="{{ $web }}" alt="web">
                <h5 class="title2">Corso Web Developer</h5>
                <p class= "p-custom">{{  $p4  }}</p>
                <button class= "button-custom2"><a class= "a-style a-custom" href="/web-developer">Apri</a></button>
            </div>
        </div>
    </div>
</header>

</x-layout>
