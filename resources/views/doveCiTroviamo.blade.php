<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork-rotte-viste</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Link my css -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ $logo }}" alt="Logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="fa-solid fa-house" style="color: #94bdff;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/chi-siamo">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dove-ci-troviamo">Dove ci troviamo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servizi
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/data-analyst">Corso Data Analyst</a></li>
                        <li><a class="dropdown-item" href="/i-a">Corso IA</a></li>
                        <li><a class="dropdown-item" href="/design">Corso UX/UI Design</a></li>
                        <li><a class="dropdown-item" href="/web-developer">Corso Web Developer</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/i-nostri-corsi">I nostri corsi</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navbar end-->
    
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
                        <div class="col text-md-end">
                            <img src="{{ $location }}" alt="Pc" width="400" class="img-fluid">
                        </div>
                        <div class="col d-flex flex-column align-items-center">                            
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

<!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
