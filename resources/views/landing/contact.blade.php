<!-- Servicios -->
<section class="py-4" id="contact">
    <div class="container py-4">
        <div class="py-4 text-start">
            <div class="pb-4 mb-4 text-center col-md-6 col-12 mx-auto">
                <h1 class="">Contáctanos</h1>
                <p class="text-muted lead">¿Listo para enviar con FerGlobal? Contáctanos hoy para recibir una cotización personalizada y experimentar la diferencia.</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 mb-4">
                    <h2 class="pb-4">Cotiza con nosotros</h2>
                    <div>
                        <div class="row">
                            <div class="col-2 col-md-auto my-auto">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-location fa-stack-1x fa-inverse text-light" style="--fa-stack-z-index: 2;"></i>
                                    <i class="fa-solid fa-circle fa-stack-2x text-primary" style="--fa-stack-z-index: 1;"></i>
                                </span>
                                <!-- <i class="rounded-circle bg-primary p-2 my-2  fa-solid fa-location text-light"></i> -->
                            </div>
                            <div class="col-9 col-md-auto my-auto">
                                <p class="my-0 py-0 fw-bold">Ubicación</p>
                                <p class="my-0 py-0 text-muted"><a class="" href="{{$info['client_location']}}" target="_blank">
                                        {{$info['client_location_text']}}</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class=" col-auto col-md-auto my-auto">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-phone fa-stack-1x fa-inverse text-light" style="--fa-stack-z-index: 2;"></i>
                                    <i class="fa-solid fa-circle fa-stack-2x text-primary" style="--fa-stack-z-index: 1;"></i>
                                </span>
                                <!-- <i class="rounded-circle bg-primary p-2 my-2  fa-solid fa-phone text-light"></i> -->
                            </div>
                            <div class=" col-auto col-md-auto my-auto">
                                <p class="my-0 py-0 fw-bold">Teléfono</p>
                                <p class="my-0 py-0 text-muted"><a class="" href="tel:{{$info['client_phone']}}">{{$info['client_phone_text']}}</a>
                                </p>
                                <p class="my-0 py-0 text-muted"><a class="" href="tel:{{$info['client_phone2']}}">{{$info['client_phone2_text']}}</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class=" col-auto col-md-auto my-auto">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-brands fa-whatsapp fa-stack-1x fa-inverse text-light" style="--fa-stack-z-index: 2;"></i>
                                    <i class="fa-solid fa-circle fa-stack-2x text-primary" style="--fa-stack-z-index: 1;"></i>
                                </span>
                                <!-- <i class="rounded-circle bg-primary p-2 my-2  fa-brands fa-whatsapp text-light"></i> -->
                            </div>
                            <div class=" col-auto col-md-auto my-auto">
                                <p class="my-0 py-0 fw-bold">Whatsapp</p>
                                <p class="my-0 py-0 text-muted"><a class="" href="https://wa.me/{{$info['client_whatsapp']}}">{{$info['client_whatsapp']}}</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class=" col-auto col-md-auto my-auto">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-envelope fa-stack-1x fa-inverse text-light" style="--fa-stack-z-index: 2;"></i>
                                    <i class="fa-solid fa-circle fa-stack-2x text-primary" style="--fa-stack-z-index: 1;"></i>
                                </span>
                                <!-- <i class="rounded-circle bg-primary p-2 my-2  fa-solid fa-envelope text-light"></i> -->
                            </div>
                            <div class=" col-auto col-md-auto my-auto">
                                <p class="my-0 py-0 fw-bold">Correo</p>
                                <p class="my-0 py-0 text-muted"><a href="mailto:{{$info['client_email']}}">{{$info['client_email']}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="card p-2 card-shadow">
                        <div class="card-body">
                            <form class="needs-validation">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                            <input type="text" name="name" class="form-control" id="book-name" required placeholder="Tu nombre">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                                    <input type="email" name="email" class="form-control" id="book-email" required placeholder="tunombre@correo.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                                    <input type="phone" name="phone" class="form-control" id="book-phone" required placeholder="">
                                </div>
                                <div class=" mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                    <textarea class="form-control" name="message" id="book-message" rows="3" required></textarea>
                                </div>
                                <div class=" mb-3">
                                    <button onclick="validateForm(event, 'contact')" type="submit" class="btn btn-primary form-control">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" id="whatsapp_number" value="{{$info['client_whatsapp']}}">