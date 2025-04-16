<x-layout>
<body>
    
<!-- Contenuto -->
    <header>
    <div class="col container-fluid bg-body-secondary vh-50 background align-items-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center py-5 title">
                    La nostra sede si trova qui!
                </h1>
                <div class="container text-center">
                    <div class="row row-cols-1 row-cols-md-2 align-items-center">
                        <div class="col text-md-end col-query1">
                            <img src="{{ $location }}" alt="Pc" width="400" class="img-fluid">
                        </div>
                        <div class="col d-flex flex-column align-items-center col-query2">                            
                            <!-- Cards -->
                            <div class="card card2" style="width: 200px">
                                <a class= "a-location"href="https://www.google.com/maps/dir//Strada+S.+Giorgio+Martire,+2D,+70124+Bari+BA,+Italia/@41.1168123,16.767774,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1347e8bcca130e17:0x47ce9d5124576e73!2m2!1d16.8501748!2d41.1168417?entry=ttu&g_ep=EgoyMDI1MDMzMC4wIKXMDSoASAFQAw%3D%3D{{ $loc }}">
                                    <img class="contact-icons" src="{{ $loc }}" alt="loc">
                                <p class="p-custom">Strada S. Giorgio Martire, 2D, 70124 Bari BA, Italia</p>
                                </a>
                                <a href="tel:{{ $number }}">
                                    <img class="contact-icons" src="{{ $number }}" alt="number">
                                </a>
                                <a href="mailto:{{ $mail }}">
                                    <img class="contact-icons" src="{{ $mail }}" alt="mail">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

</x-layout>
