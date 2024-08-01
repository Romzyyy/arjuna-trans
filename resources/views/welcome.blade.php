@extends('layouts.main')

<div class="navbar-wrapper position-relative">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e3799">
        <div class="container position-relative" style="z-index: 2">
            <div class="navbar-text text-white fw-bold text-center flex-grow-1">
                WISATA, PRIVAT TRIP, TOUR DAN ROMBONGAN
            </div>
            <div class="d-flex align-items-center social-icons">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jadwal Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Short Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn btn-success rounded-pill contact-btn">
                <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
            </a>
        </div>
    </nav>

    <a class="navbar-brand position-absolute top-50 translate-middle-y" href="#" style="z-index: 3; left: 15px">
        <img src="image/arjuna-logo.png" alt="Logo" width="80" height="80"
            class="d-inline-block align-text-top" />
    </a>
</div>

<section class="hero-section">
    <div class="hero-shape hero-shape-1 d-none d-md-block"></div>
    <div class="hero-shape hero-shape-2 d-none d-md-block"></div>
    <div class="hero-shape hero-shape-3 d-none d-md-block"></div>
    <div class="hero-shape hero-shape-4 d-none d-md-block"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="text-danger fs-5 fw-semibold">WE'RE THE BEST</p>
                <h1 class="display-4 fw-bold mb-3">ARJUNA TRANSPORT</h1>
                <p class="lead mb-4 fw-medium">
                    Wisata, Privat Trip, Tour dan Rombongan
                </p>
                <button type="button" class="btn btn-success p-3 mt-3 mt-lg-5">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 48 48">
                        <path fill="#fff"
                            d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                        </path>
                        <path fill="#fff"
                            d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                        </path>
                        <path fill="#cfd8dc"
                            d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                        </path>
                        <path fill="#40c351"
                            d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                        </path>
                        <path fill="#fff" fill-rule="evenodd"
                            d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="fw-semibold px-1">Hubungi kami</span>
                </button>
            </div>
            <div class="col-lg-6 hero-image">
                <img src="image/Frame-5.png" alt="Arjuna Transport Buses" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- Section Paket Layanan -->
<section class="paket-layanan py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-12 d-md-none mb-3">
                        <img src="image/Rectangle10.png" alt="Rectangle" class="img-fluid rounded w-100" />
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="image/orang.png" alt="Orang" class="img-fluid rounded mb-3" />
                        <img src="image/bussatu.png" alt="Bus" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="image/Rectangle10.png" alt="Rectangle" class="img-fluid rounded mt-md-5" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-bars text-danger me-2"></i>
                    <h5 class="text-uppercase mb-0">Paket Layanan</h5>
                </div>
                <h2 class="fw-bold mb-4">PAKET ARJUNA TRANSPORT</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
                <div class="row mt-5">
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-4">
                            <h5>Anda ingin paket lainnya?</h5>
                            <p>Kami sudah siapkan!</p>
                            <button type="button" class="btn btn-success p-3 mt-3 mt-lg-5">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 48 48">
                                    <path fill="#fff"
                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                    </path>
                                    <path fill="#fff"
                                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                    </path>
                                    <path fill="#cfd8dc"
                                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                    </path>
                                    <path fill="#40c351"
                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                    </path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="fw-semibold px-1">Hubungi kami</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="bg-secondary rounded p-3 me-3">
                                    <img src="image/image9.png" width="50" height="50" alt="Customer Icon" />
                                </div>
                                <div>
                                    <h3 class="fw-bold mb-0">1959+</h3>
                                    <p class="mb-0">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="bg-secondary rounded p-3 me-3">
                                    <img src="image/image10.png" width="50" height="50" alt="Service Icon" />
                                </div>
                                <div>
                                    <h3 class="fw-bold mb-0">100%</h3>
                                    <p class="mb-0">Terlayani</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Agenda dan Jadwal Trip -->
<div class="bg-image bg-light justify-content-center align-items-center pt-5"
    style="background-image: url('image/service-shape.png')">
    <div class="container mt-5">
        <div class="d-flex flex-column flex-lg-row justify-content-between">
            <div class="mb-4 mb-lg-0">
                <div class="d-flex align-items-start justify-content-start gap-3 text-danger">
                    <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z">
                        </path>
                    </svg>
                    <p class="text-uppercase fs-5">JADWAL TRIP</p>
                </div>
                <h1 class="fs-1 fw-bold">AGENDA DAN JADWAL TRIP</h1>
            </div>
            <div class="fs-5 lh-1">
                <p>kemana anda akan berkunjung? Sendiri?</p>
                <p>Atau dengan rombongan?</p>
                <p>Hubungi kami, Segera kami jadwalkan!</p>
                <button type="button" class="btn btn-success p-3 mt-3 mt-lg-5">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 48 48">
                        <path fill="#fff"
                            d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                        </path>
                        <path fill="#fff"
                            d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                        </path>
                        <path fill="#cfd8dc"
                            d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                        </path>
                        <path fill="#40c351"
                            d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                        </path>
                        <path fill="#fff" fill-rule="evenodd"
                            d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="fw-semibold px-1">Hubungi kami</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container text-center my-5 py-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-5 g-4">
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector1.png" class="img-fluid" alt="" />
            </div>
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector2.png" class="img-fluid" alt="" />
            </div>
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector3.png" class="img-fluid" alt="" />
            </div>
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector1.png" class="img-fluid" alt="" />
            </div>
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector2.png" class="img-fluid" alt="" />
            </div>
            <div class="col position-relative mb-5">
                <div class="position-absolute top-0 start-50 translate-middle bg-light py-3 w-75">
                    <p class="text-uppercase">34-31 Desember 2026</p>
                    <p class="fw-bold">"WE GO TO DIENG"</p>
                </div>
                <img src="image/Vector3.png" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</div>

<section class="video-unggahan py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <small class="text-uppercase text-white-50">SHORT VIDEO</small>
                <h2 class="text-white display-6 fw-bold mb-4">
                    Video Unggahan tentang Arjuna Travel
                </h2>
                <a href="https://www.youtube.com/channel/your-channel-id" class="btn btn-danger btn-lg"
                    target="_blank">
                    Buka Youtube Kami
                </a>
            </div>
            <div class="col-lg-6 col-md-12 text-lg-end text-center">
                <a href="#" class="social-icon me-3 mb-3 mb-lg-0"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="#" class="social-icon me-3 mb-3 mb-lg-0"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="social-icon me-3 mb-3 mb-lg-0"><i class="fab fa-tiktok fa-2x"></i></a>
                <a href="#" class="social-icon mb-3 mb-lg-0"><i class="fab fa-youtube fa-2x"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- video ungghan -->
<div class="container-fluid text-center">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5 g-4">
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 1" />
            </div>
        </div>
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 2" />
            </div>
        </div>
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 3" />
            </div>
        </div>
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 4" />
            </div>
        </div>
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 5" />
            </div>
        </div>
        <div class="col mb-4">
            <div class="video-thumbnail">
                <img src="image/youtube.png" class="img-fluid" alt="Video 6" />
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example mt-5 mb-5">
        <ul class="pagination justify-content-center gap-3">
            <li class="page-item">
                <a class="page-link text-black badge p-3" href="#" style="background-color: #cccccc">&lt;</a>
            </li>
            <li class="page-item">
                <a class="page-link badge p-3" href="#" style="background-color: #00bb6d">1</a>
            </li>
            <li class="page-item">
                <a class="page-link text-black badge p-3" href="#" style="background-color: #cccccc">2</a>
            </li>
            <li class="page-item">
                <a class="page-link text-black badge p-3" href="#" style="background-color: #cccccc">...</a>
            </li>
            <li class="page-item">
                <a class="page-link text-black badge p-3" href="#" style="background-color: #cccccc">1337</a>
            </li>
            <li class="page-item">
                <a class="page-link text-black badge p-3" href="#" style="background-color: #cccccc">&gt;</a>
            </li>
        </ul>
    </nav>
</div>

<section class="testimonial py-5">
    <div class="container">
        <h5 class="text-danger text-center">TESTIMONIALS</h5>
        <h2 class="text-center mb-5">TESTIMONI PENUMPANG KAMI</h2>

        <div class="avatar-group text-center mb-4">
            <img src="image/orang.png" alt="Avatar 1" class="avatar" />
            <img src="image/orang.png" alt="Avatar 2" class="avatar" />
            <img src="image/orang.png" alt="Avatar 3" class="avatar" />
            <img src="image/orang.png" alt="Avatar 4" class="avatar" />
            <img src="image/orang.png" alt="Avatar 5" class="avatar" />
        </div>

        <div class="testimonial-content text-center">
            <p class="mb-4">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which
                don't look even slightly believable.
            </p>
            <div class="rating mb-2">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
            </div>
            <h5 class="mb-0">Lui Maguire</h5>
            <small class="text-muted">CEO Transport Ltd.</small>
        </div>
    </div>
</section>

<section class="tentang-kami py-5">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Tentang Kami</h2>
                <p class="text-muted">
                    Lorem ipsum is simply free text available dolor sit
                    amet, consectetur notted adipisicing.
                </p>

                <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-custom-red text-white p-3 me-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Alamat</h5>
                            <p class="mb-0">
                                Alamat lengkap, nama jalan, nama desa,
                                kecamatan kabupaten provinsi, kode pos
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-custom-navy text-white p-3 me-3">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Contact Person</h5>
                            <p class="mb-0">
                                Telp: 081234567890<br />WhatsApp:
                                098367346322
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-custom-blue text-white p-3 me-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">email@email.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">TESTIMONI ANDA?</h3>
                        <p class="text-muted">
                            Isi dahulu formulir berikut!
                        </p>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Your Full Name*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control"
                                            placeholder="Your Email Address*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 h-100">
                                        <textarea class="form-control h-100" placeholder="Your Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" />
                                <label class="form-check-label" for="terms">I agree to the
                                    <a href="#" class="text-danger">Terms & Conditions</a></label>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-custom-red">
                                    SEND MESSAGE
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
