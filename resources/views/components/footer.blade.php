<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img id="header-img" src="{{asset('assets/img/logo.png')}}" height="60" alt="" srcset="">

                <p class="mt-2 col-md-8">Tu socio de confianza en soluciones de transporte global.</p>
            </div>

            <div class="col-md-4">
                <h6>Links</h6>
                <ul class="list-unstyled">
                    <li><a class="text-light" href="/ferglobal/public/#home">Home</a></li>
                    <li><a class="text-light" href="/ferglobal/public/#services">Servicios</a></li>
                    <li><a class="text-light" href="/ferglobal/public/#us">Nosotros</a></li>
                    <li><a class="text-light" href="/ferglobal/public/#needs">¿Por qué escogernos?</a></li>
                    <li><a class="text-light" href="/ferglobal/public/#contact">Contacto</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6>Servicios</h6>
                <ul class="list-unstyled">
                    @foreach ($services as $service)
                    <li>{{$service["name"]}}</li>

                    @endforeach
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <small>© 2025 FerGlobal. Todos los derechos reservados.</small>
        </div>
    </div>
</footer>