 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            <i class="fa-solid fa-house" style="color: #94bdff;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dove-ci-troviamo') }}">Dove ci troviamo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servizi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('data-analyst') }}">Corso Data Analyst</a></li>
                            <li><a class="dropdown-item" href="{{ route('i-a') }}">Corso IA</a></li>
                            <li><a class="dropdown-item" href="{{ route('design') }}">Corso UX/UI Design</a></li>
                            <li><a class="dropdown-item" href="{{ route('web-developer') }}">Corso Web Developer</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('i-nostri-corsi') }}">I nostri corsi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navbar end-->