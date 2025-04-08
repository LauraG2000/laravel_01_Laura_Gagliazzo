<!doctype html>
<html lang="en">
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

    <!-- Chi siamo -->
    <div class="col container-fluid bg-body-secondary vh-50 background">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center py-5 title">CHI SIAMO</h1>
            </div>
        </div>
        
        <!-- Cards -->
    <header>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 custom-card">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-7">
                            <img src="{{ $team }}" alt="Logo" class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-md-5 d-flex align-items-center text-bg-dark p-3">
                            <div class="card-body text-center"> 
                                <h5 class="card-style">Il nostro Team</h5>
                                <div class="card-text">
                                    <div class="title2">
                                        @foreach ($teachers as $teacher)
                                            <div>
                                                {{ $teacher['name'] }} {{ $teacher['surname'] }} {{ $teacher['testo'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
