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
                                    <div class="py-3">
                                        {{ $teacher['name'] }} {{ $teacher['surname'] }}<br>
                                        {{ $teacher['testo'] }}
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

