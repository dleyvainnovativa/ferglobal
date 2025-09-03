<!-- Servicios -->
<section class="py-4 bg-light" id="services">
    <div class="container py-4">
        <div class="py-4 text-center">
            <h1 class="fw-bold">Nuestros servicios de transporte</h1>
            <p class="lead text-muted">Soluciones logísticas integrales adaptadas a las necesidades de tu negocio con eficiencia y confiabilidad.</p>
        </div>
        <div class="row text-start g-4">
            @foreach ($services as $service)

            <div class="col-12 col-md-4 mx-auto">
                <div class="card card-shadow p-3 mx-auto">
                    <div class="card-body text-center">
                        <span class="fa-stack fa-xl mb-2">
                            <i class="fa {{$service['icon']}} fa-stack-1x fa-inverse text-primary" style="--fa-stack-z-index: 2;"></i>
                            <i class="fa-solid fa-circle fa-stack-2x text-primary-light" style="--fa-stack-z-index: 1;"></i>
                        </span>
                        <h4>{{$service["name"]}}</h4>
                        <p>{{$service["description"]}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>