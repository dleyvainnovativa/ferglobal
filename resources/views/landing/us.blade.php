<!-- Servicios -->
<section class="py-4 bg-white text-dark" id="us">
    <div class="container py-2">
        <div class="py-5 text-start">
            <h1 class="">Acerca de <span class="text-primary fw-bold">FerGlobal</span></h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="lead">Somos una empresa autotransporte de carga terrestre que tuvo inicios hace mas de 60 años, nos pusieron en los primeros lugares en crecimiento dentro de la industria del auto transporte.</p>
                    <p class="lead">Al pasar de los años fuimos creando alianzas comerciales a nivel nacional y actualmente ofrecemos servicios de logistica terrestre en los principales puertos de la republica mexicana, como por ejemplo, Veracruz, Altamira, Manzanillo y Lazaro Cardenas, no dejamos de lado los transitos internos dentro de Mexico así como traslados terrestres desde y hacia norte, centro y Sudamérica.</p>
                    @php
                    $features = collect($features);
                    $half = ceil($features->count() / 2);
                    $firstHalf = $features->slice(0, $half);
                    $secondHalf = $features->slice($half);
                    @endphp
                    <div class="row py-4">
                        <div class="col-6">
                            @foreach ($firstHalf as $feature)
                            <p><i class="me-2 fa fa-solid text-primary fa-circle-check"></i>{{$feature}}</p>
                            @endforeach
                        </div>
                        <div class="col-6">
                            @foreach ($secondHalf as $feature)
                            <p><i class="me-2 fa fa-solid text-primary fa-circle-check"></i>{{$feature}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card text-bg-dark">

                        <img src="{{asset('assets/img/us2.jpeg')}}" class="card-img" alt="...">
                        <div id="us-card" class=" card text-light position-absolute bg-primary">
                            <div class="card-body p-2">
                                <div class="p-3">

                                    <h2 class="py-0 my-0">60+</h2>
                                    <h6 class="py-0 my-0">Años de experiencia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>