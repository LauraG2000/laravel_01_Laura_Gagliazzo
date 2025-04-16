<x-layout>

<!-- Contenuto -->
<header>
    <div class="col-12 text-center py-5 title">
        <p> {{ $subtitle }} </p>
    </div>
    <div class="container-fluid card card-service align-items-center text-center">
        <div class="row">
            <img src="{{ $ia }}" class="card-img-top" alt="ia image">
            <div class="card-body">
            <div class="col-12 text-center">
                <p class="p-custom">{{ $pIa  }}</p>
            </div>
            <div>
                <h5 class="card-title h5-custom"> {{$subtitle}} </h5>
                <a href="#" class="btn btn-primary btn-custom">Iscriviti qui</a>
            </div>
        </div>    
    </div>
</header>



</x-layout>