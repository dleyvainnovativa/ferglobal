<!-- Footer -->
<footer class="bg-dark text-white pb-3">
    <div id="weatherCarousel" class="carousel slide bg-primary mt-5" data-bs-ride="carousel">
        <div class="carousel-inner container py-5">

            <!-- Veracruz -->
            <div class="carousel-item active">
                <div class="text-center">
                    <a class="weatherwidget-io"
                        href="https://forecast7.com/es/19d17n96d13/heroica-veracruz/"
                        data-label_1="VERACRUZ"
                        data-label_2="Clima"
                        data-theme="original"
                        data-basecolor="#eb623c"
                        data-highcolor="#fad7d7"
                        data-lowcolor="#acccf8"
                        data-raincolor="#e4ecf7">
                        VERACRUZ Clima
                    </a>
                </div>
            </div>

            <!-- Manzanillo -->
            <div class="carousel-item">
                <div class="text-center">
                    <a class="weatherwidget-io"
                        href="https://forecast7.com/es/19d11n104d34/manzanillo/"
                        data-label_1="MANZANILLO"
                        data-label_2="Clima"
                        data-theme="original"
                        data-basecolor="#eb623c"
                        data-highcolor="#fad7d7"
                        data-lowcolor="#acccf8"
                        data-raincolor="#e4ecf7">
                        MANZANILLO Clima
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="text-center">
                    <a class="weatherwidget-io" href="https://forecast7.com/es/22d41n97d92/altamira/" data-label_1="ALTAMIRA" data-label_2="Clima" data-theme="original" data-basecolor="#eb623c" data-highcolor="#fad7d7" data-lowcolor="#acccf8" data-raincolor="#e4ecf7">ALTAMIRA Clima</a>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#weatherCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#weatherCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- WeatherWidget Script (only once!) -->
    <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-4">
                <img id="header-img" src="{{asset('/assets/img/logo4.png')}}" height="60" alt="" srcset="">

                <p class="mt-2 col-md-8">Tu socio de confianza en soluciones de transporte global.</p>
            </div>

            <div class="col-md-4">
                <h6>Links</h6>
                <ul class="list-unstyled">
                    <li><a class="text-light" href="#home">Home</a></li>
                    <li><a class="text-light" href="#services">Servicios</a></li>
                    <li><a class="text-light" href="#us">Nosotros</a></li>
                    <li><a class="text-light" href="#needs">¿Por qué escogernos?</a></li>
                    <li><a class="text-light" href="#contact">Contacto</a></li>
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