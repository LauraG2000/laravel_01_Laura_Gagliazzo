<x-layout>
    <!-- Chi siamo -->
    <div class="col container-fluid bg-body-secondary vh-50 background">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center py-5 title">CHI SIAMO</h1>
            </div>
        </div>
    </div>
        
    <!-- Cards -->
    <header>
        <x-card :teachers="$teachers" :team="$team" x-card/>
    </header>
</x-layout>