<!-- Servicios -->
<section class="py-4 bg-primary-light">
    <div class="container py-4" id="needs">
        <div class="py-4 text-center">
            <h1 class="">¿Por qué escoger FerGlobal?</h1>
            <p class="lead text-muted">Vamos más allá del transporte para ofrecer soluciones logísticas integrales que impulsan el crecimiento de tu negocio.</p>
        </div>
        <div class="row text-start g-4">
            @foreach ($needs as $need)
            <div class="col-12 col-md-3">
                <div class="card card-shadow p-3">
                    <div class="card-body text-center">
                        <span class="fa-stack fa-lg mb-4">
                            <i class="fa {{$need['icon']}} fa-stack-1x fa-inverse" style="--fa-stack-z-index: 2;"></i>
                            <i class="fa-solid fa-circle fa-stack-2x text-primary" style="--fa-stack-z-index: 1;"></i>
                        </span>
                        <h5>{{$need["name"]}}</h5>
                        <p>{{$need["description"]}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>