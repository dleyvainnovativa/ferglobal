<!-- Servicios -->
<section class="py-4 mb-4" id="downloads">
    <div class="container py-4 mb-4">
        <div class="py-4 text-center">
            <h1 class="fw-bold">Descargas</h1>
            <p class="lead text-muted">Accede a documentos, formularios y recursos esenciales para optimizar tus operaciones logísticas.</p>
        </div>
        <div class="row text-start g-4">
            @foreach ($files as $file)

            <div class="col-12 col-md-3">
                <div class="card card-shadow p-3">
                    <div class="card-body text-start">
                        <span class="fa-stack fa-xl mb-2">
                            <i class="fa {{$file['icon']}} fa-stack-1x fa-inverse text-primary" style="--fa-stack-z-index: 2;"></i>
                            <i class="fa-solid fa-circle fa-stack-2x text-primary-light" style="--fa-stack-z-index: 1;"></i>
                        </span>
                        <h4>{{$file["name"]}}</h4>
                        <p>{{$file["description"]}}</p>
                        <div class="d-grid gap-2">

                            <a download href="{{$file['location']}}" class="btn btn-primary">Descargar</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>