<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork-rotte-viste</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    <div class="col-12 text-center py-5 title">
        <p> {{ $subtitle }} </p>
    </div>
    <div class="container-fluid card card-service align-items-center text-center">
        <div class="row">
            <img src="{{ $web }}" class="card-img-top" alt="design image">
            <div class="card-body">
            <div class="col-12 text-center">
                <p class="p-custom">{{ $pWeb  }}</p>
            </div>
            <div>
                <h5 class="card-title h5-custom"> {{$subtitle}} </h5>
                <a href="#" class="btn btn-primary btn-custom">Iscriviti qui</a>
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
