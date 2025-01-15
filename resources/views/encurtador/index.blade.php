<x-guest.layout title="Encurtador de Links">

    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                <span class="d-none d-lg-block">ENCURTADOR</span>
                            </a>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Cole a URL a ser encurtada</h5>
                                </div>

                                <form class="row g-3 needs-validation" id="form-encurtar-url" method="post">
                                    @csrf

                                    <div class="col-12">
                                        <input type="text" name="url" class="form-control" id="url_id"
                                            required placeholder="cole aqui a sua url">
                                        <div class="error-url text-danger"></div>
                                    </div>

                                    <div class="col-12 container-url-encurtada">
                                        <label for="">URL Encurtada</label>
                                        <input type="text" name="url_encurtada" class="form-control"
                                            id="url_encurtada" readonly>
                                        <button type="button" id="btn-copy-url" class="btn btn-warning btn-sm">
                                            <i class="bi bi-copy"></i> Copiar a URL
                                        </button>
                                    </div>

                                    <div class="col-12 container-button">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary w-100 btn-button-encurtar"
                                                    type="submit">
                                                    <i class="bi bi-scissors"></i> Encurtar URL
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="{{ route('index') }}"
                                                    class="btn btn-primary btn-block btn-button-encurtar-reload">
                                                    <i class="bi bi-arrow-clockwise"></i>
                                                    Encurtar outra url
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p>
                                            <span class="text-danger">*</span>
                                            <b>Encurtador</b> é uma ferramenta para encurtar URLs e gerar links curtos
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

</x-guest.layout>
