<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        .trapezoid {
            border-bottom: 100px solid #ff0000;
            border-right: 45px solid transparent;
            height: 0px;
            width: 155px;
        }

        .trapezoidright {
            border-top: 80px solid #ff0000;
            border-left: 45px solid transparent;
            height: 80px;
            width: 185px;
        }

        .parallelogram {
            width: 12px;
            height: 100px;
            transform: skew(25deg);
            background: #ff0000;
        }

        .imgshape {
            width: 258px;
            height: 282.5px;
            object-fit: cover;
            border-top: 5px solid black;
            border-bottom: 5px solid black;
            border-right: 3px solid black;
            border-left: 5px solid black;
        }

        .navbar {
            padding-bottom: 0;
            padding-top: 0
        }
    </style>
</head>

<body class="antialiased">
    {{-- navbar --}}
    <nav class="navbar bg-body-tertiary">
        <div class="position-relative w-100">
            <div class="position-absolute top-0 start-0">
                <img src="image/merah-kiri.png" alt="" width="500px" height="162px">
                <div
                    class="bg-light border border-3 border-warning position-absolute top-50 start-50 translate-middle rounded-circle p-3 ">
                    <img src="image/arjuna-logo.png" class="" alt="" width="80px" height="80px">
                </div>
            </div>
            <div class="w-100">
                <div class="text-center p-3" style="background-color: #000275;">
                    <p class="text-white fw-bold fs-4 text-uppercase">wisata, privat trip, tour dan rombongan</p>
                </div>
                <div class="p-3" style="background-color: #00014e;">
                    <ul class="d-flex justify-content-center align-items-center gap-5 list-group-horizontal text-white">
                        <li class="list-group-item fs-5 fw-semibold">Home</li>
                        <li class="list-group-item fs-5 fw-semibold">Paket Layanan</li>
                        <li class="list-group-item fs-5 fw-semibold">Jadwal Trip</li>
                        <li class="list-group-item fs-5 fw-semibold">Short Video</li>
                        <li class="list-group-item  fs-5 fw-semibold">Testimoni</li>
                        <li class="list-group-item  fs-5 fw-semibold">Tentang Kami</li>
                    </ul>
                </div>
            </div>
            <div class="position-absolute top-0 end-0 ">
                <img src="image/merah-kanan.png" alt="" width="500px" height="85px">
                <div class="ps-5 ms-5">
                    <div class="position-absolute top-0 end-0 translate-middle rounded-circle mt-5">
                        <ul
                            class="d-flex justify-content-center align-items-center gap-5 list-group-horizontal text-white">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-brand-facebook">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z" />
                                </svg></li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M16.5 7.5l0 .01" />
                                </svg></li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-brand-twitter">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M14.058 3.41c-1.807 .767 -2.995 2.453 -3.056 4.38l-.002 .182l-.243 -.023c-2.392 -.269 -4.498 -1.512 -5.944 -3.531a1 1 0 0 0 -1.685 .092l-.097 .186l-.049 .099c-.719 1.485 -1.19 3.29 -1.017 5.203l.03 .273c.283 2.263 1.5 4.215 3.779 5.679l.173 .107l-.081 .043c-1.315 .663 -2.518 .952 -3.827 .9c-1.056 -.04 -1.446 1.372 -.518 1.878c3.598 1.961 7.461 2.566 10.792 1.6c4.06 -1.18 7.152 -4.223 8.335 -8.433l.127 -.495c.238 -.993 .372 -2.006 .401 -3.024l.003 -.332l.393 -.779l.44 -.862l.214 -.434l.118 -.247c.265 -.565 .456 -1.033 .574 -1.43l.014 -.056l.008 -.018c.22 -.593 -.166 -1.358 -.941 -1.358l-.122 .007a.997 .997 0 0 0 -.231 .057l-.086 .038a7.46 7.46 0 0 1 -.88 .36l-.356 .115l-.271 .08l-.772 .214c-1.336 -1.118 -3.144 -1.254 -5.012 -.554l-.211 .084z" />
                                </svg></li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-brand-youtube">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z" />
                                </svg></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-success p-3 mt-2">
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
                        <span class="fw-semibold px-1">Hubungi kami</span></button>
                </div>
            </div>
        </div>

    </nav>

    {{-- Banner --}}
    <div class="bg-light position-relative">
        <div>
            <img class="position-absolute bottom-0 start-0" src="image/shapepojok.png" alt="">
            <img class="position-absolute top-0 pt-5 pe-5 me-5  end-0" src="image/circlebiru.png" alt="">
            <img class="position-absolute top-0 pt-5 start-50" src="image/dot-circle.png" alt="">
            <img class="position-absolute top-0 start-50" src="image/kuningatas.png" alt=""
                style="margin-top: 10rem; margin-left: -10rem;">
            <img class="position-absolute bottom-0" src="image/kuningbawah.png" alt=""
                style="margin-left: 30rem; margin-bottom: 5rem;">
            <img class="position-absolute top-0 pt-5 start-50 " src="image/dag.png" alt=""
                style="margin-left: -20rem">
        </div>
        <div class="container text-center " style="height: 100vh">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="col text-start" style="margin-top: -20rem">
                    <div class="h-50 w-50 d-flex align-items-start justify-content-start gap-3 text-danger ">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z">
                            </path>
                        </svg>
                        <p class="fw-bold fs-3">WE'RE THE BEST</p>
                    </div>
                    <h1 class="fw-bolder " style="font-size: 56px">ARJUNA TRANSPORT</h1>
                    <P class="fs-5">Wisata, Privat, Tour, dan Rombongan</P>
                    <div class="mt-5">
                        <button type="button" class="btn btn-success p-3">
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
                            <span class="fw-semibold px-1">Hubungi kami</span></button>
                    </div>
                </div>
                <div class="col">
                    <img class="img-fluid" src="image/Frame-5.png" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Layanan --}}
    <div class="container text-center position-relative" style="height: 100vh">
        <div class="position-absolute top-0 start-0 z-n1">
            <img src="image/about-shape.png" alt="" style="margin-top: 200px">
        </div>
        <div class="row h-100 d-flex align-items-center justify-content-center gap-5">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img class="imgshape m-4 rounded border" src="image/orang.png" alt="">
                        <img class="imgshape m-4 rounded border" src="image/bussatu.png" alt="">
                    </div>
                    <div class="col d-flex align-items-center justify-content-start">
                        <img class="imgshape rounded border" src="image/mobil.png" alt="">
                    </div>
                </div>

            </div>
            <div class="col text-start mt-2">
                <div class="d-flex align-items-start justify-content-start gap-3 text-danger">
                    <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z">
                        </path>
                    </svg>
                    <p class="text-uppercase fs-5">paket layanan</p>
                </div>
                <h1 class="py-4 fw-bolder">PAKET ARJUNA TRANSPORT</h1>
                <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corporis exercitationem
                    vel
                    explicabo! Quas maxime architecto reiciendis nam eos vel dicta quae? In at voluptatem atque,
                    nulla,
                    molestias nobis voluptate.</P>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempore pariatur, quibusdam libero
                    harum voluptates!</p>
                <div class="row mt-5 gap-5 ml-5">
                    <div class="col border border-secondary rounded p-5">
                        <p class="fs-5">Anda ingin paket lainnya?</p>
                        <p class="fs-5">Kami sudah siapkan!</p>
                        <button type="button" class="btn btn-success p-3 mt-5">
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
                            <span class="fw-semibold px-1">Hubungi kami</span></button>
                    </div>
                    <div class="col ">
                        <div class="row">
                            <div class="col bg-secondary rounded p-2 d-flex alig-items-center justify-content-center">
                                <img src="image/image9.png" width="100px" height="100px" alt="">
                            </div>
                            <div class="col">
                                <p class="fw-bold fs-1">1959+</p>
                                <p class="fw-semibold fs-5">Custommer</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col bg-secondary rounded p-3 d-flex alig-items-center justify-content-center">
                                <img src="image/image10.png" width="80px" height="80px" alt="">

                            </div>
                            <div class="col">
                                <p class="fw-bold fs-1">100%</p>
                                <p class="fw-semibold fs-5">Terlayani</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Agenda Dan Jadwal --}}
    <div class="bg-image bg-light justify-content-center align-items-center pt-5"
        style="background-image: url('image/service-shape.png');">
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <div class="">
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
                    <button type="button" class="btn btn-success p-3 mt-5">
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
                        <span class="fw-semibold px-1">Hubungi kami</span></button>
                </div>
            </div>
        </div>

        <div class="container text-center my-5 py-5">
            <div class="row row-cols-3 mt-5 g-5">
                <div class="col position-relative ">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector1.png" width="374.5px" height="328px" alt="">
                </div>
                <div class="col position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector2.png" width="374.5px" height="328px" alt="">
                </div>
                <div class="col position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector3.png" width="374.5px" height="328px" alt="">
                </div>
                <div class="col position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector1.png" width="374.5px" height="328px" alt="">
                </div>
                <div class="col position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector2.png" width="374.5px" height="328px" alt="">
                </div>
                <div class="col position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle bg-light py-3  w-75">
                        <p class="text-uppercase">34-31 Desember 2026</p>
                        <p class="fw-bold">"WE GO TO DIENG"</p>
                    </div>
                    <img src="image/Vector3.png" width="374.5px" height="328px" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Banner Sosmed --}}
    <div class="bg-image " style="background-image: url('image/sosmedbground.png'); height: 350px;">
        <div class="d-flex justify-content-around align-items-center h-100">
            <div class="text-white ">
                <p class="text-uppercase fw-semibold">short video</p>
                <p class="fs-1 fw-bold text-wrap" style="width: 28rem;">video unggahan tentang arjuna travel</p>
                <button class="btn btn-danger px-5 py-3"><span class="fw-semibold ">Buka Youtue kami</span></button>
            </div>
            <div class="">
                <div class="container">
                    <div class="row text-center g-5">
                        <div class="col mx-5">
                            <div class="bg-white rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                    viewBox="0 0 48 48">
                                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                    <path fill="#fff"
                                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="col mx-5">
                            <div class="bg-white rounded-circle">
                                <svg style="border-radius: 100%" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="100" height="100" viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                        cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5"></stop>
                                        <stop offset=".328" stop-color="#ff543f"></stop>
                                        <stop offset=".348" stop-color="#fc5245"></stop>
                                        <stop offset=".504" stop-color="#e64771"></stop>
                                        <stop offset=".643" stop-color="#d53e91"></stop>
                                        <stop offset=".761" stop-color="#cc39a4"></stop>
                                        <stop offset=".841" stop-color="#c837ab"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                        cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9"></stop>
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <path fill="#fff"
                                        d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                    </path>
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                    <path fill="#fff"
                                        d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="col mx-5">
                            <div class="bg-white rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                    viewBox="0 0 48 48">
                                    <path fill="#212121" fill-rule="evenodd"
                                        d="M10.904,6h26.191C39.804,6,42,8.196,42,10.904v26.191 C42,39.804,39.804,42,37.096,42H10.904C8.196,42,6,39.804,6,37.096V10.904C6,8.196,8.196,6,10.904,6z"
                                        clip-rule="evenodd"></path>
                                    <path fill="#ec407a" fill-rule="evenodd"
                                        d="M29.208,20.607c1.576,1.126,3.507,1.788,5.592,1.788v-4.011 c-0.395,0-0.788-0.041-1.174-0.123v3.157c-2.085,0-4.015-0.663-5.592-1.788v8.184c0,4.094-3.321,7.413-7.417,7.413 c-1.528,0-2.949-0.462-4.129-1.254c1.347,1.376,3.225,2.23,5.303,2.23c4.096,0,7.417-3.319,7.417-7.413L29.208,20.607L29.208,20.607 z M30.657,16.561c-0.805-0.879-1.334-2.016-1.449-3.273v-0.516h-1.113C28.375,14.369,29.331,15.734,30.657,16.561L30.657,16.561z M19.079,30.832c-0.45-0.59-0.693-1.311-0.692-2.053c0-1.873,1.519-3.391,3.393-3.391c0.349,0,0.696,0.053,1.029,0.159v-4.1 c-0.389-0.053-0.781-0.076-1.174-0.068v3.191c-0.333-0.106-0.68-0.159-1.03-0.159c-1.874,0-3.393,1.518-3.393,3.391 C17.213,29.127,17.972,30.274,19.079,30.832z"
                                        clip-rule="evenodd"></path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M28.034,19.63c1.576,1.126,3.507,1.788,5.592,1.788v-3.157 c-1.164-0.248-2.194-0.856-2.969-1.701c-1.326-0.827-2.281-2.191-2.561-3.788h-2.923v16.018c-0.007,1.867-1.523,3.379-3.393,3.379 c-1.102,0-2.081-0.525-2.701-1.338c-1.107-0.558-1.866-1.705-1.866-3.029c0-1.873,1.519-3.391,3.393-3.391 c0.359,0,0.705,0.056,1.03,0.159V21.38c-4.024,0.083-7.26,3.369-7.26,7.411c0,2.018,0.806,3.847,2.114,5.183 c1.18,0.792,2.601,1.254,4.129,1.254c4.096,0,7.417-3.319,7.417-7.413L28.034,19.63L28.034,19.63z"
                                        clip-rule="evenodd"></path>
                                    <path fill="#81d4fa" fill-rule="evenodd"
                                        d="M33.626,18.262v-0.854c-1.05,0.002-2.078-0.292-2.969-0.848 C31.445,17.423,32.483,18.018,33.626,18.262z M28.095,12.772c-0.027-0.153-0.047-0.306-0.061-0.461v-0.516h-4.036v16.019 c-0.006,1.867-1.523,3.379-3.393,3.379c-0.549,0-1.067-0.13-1.526-0.362c0.62,0.813,1.599,1.338,2.701,1.338 c1.87,0,3.386-1.512,3.393-3.379V12.772H28.095z M21.635,21.38v-0.909c-0.337-0.046-0.677-0.069-1.018-0.069 c-4.097,0-7.417,3.319-7.417,7.413c0,2.567,1.305,4.829,3.288,6.159c-1.308-1.336-2.114-3.165-2.114-5.183 C14.374,24.749,17.611,21.463,21.635,21.38z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col mx-5">
                            <div class="bg-white rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                    viewBox="0 0 48 48">
                                    <path fill="#FF3D00"
                                        d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                                    </path>
                                    <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Youtube -->
    <div class="container-fluid text-center">
        <div class="row row-cols-3 my-5 ">
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
            <div class="col my-5">
                <img src="image/youtube.png" width="490px" height="325px" alt="">
            </div>
        </div>
        <nav aria-label="Page navigation example mt-5 mb-5">
            <ul class="pagination justify-content-center gap-3 ">
                <li class="page-item ">
                    <a class="page-link text-black  badge p-3" href="#"
                        style="background-color: #cccccc;">&lt;</a>
                </li>
                <li class="page-item "><a class="page-link  badge p-3" href="#"
                        style="background-color: #00bb6d;">1</a></li>
                <li class="page-item"><a class="page-link text-black badge p-3" href="#"
                        style="background-color: #cccccc;">2</a></li>
                <li class="page-item"><a class="page-link text-black badge p-3" href="#"
                        style="background-color: #cccccc;">...</a></li>
                <li class="page-item"><a class="page-link text-black badge p-3" href="#"
                        style="background-color: #cccccc;">1337</a></li>
                <li class="page-item">
                    <a class="page-link text-black badge p-3" href="#"
                        style="background-color: #cccccc;">&gt;</a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- testimoni --}}
    <div class="bg-light">
        <div class="container text-center mt-5 pt-5 ">
            <div class="d-flex align-items-start justify-content-center gap-3 text-danger">
                <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z">
                    </path>
                </svg>
                <p class="text-uppercase fs-5">testimonials</p>
            </div>
            <p class="fs-2 fw-semibold mt-5">testimoni penumpang kami</p>
            <div class="container mt-5">
                <div class="d-flex align-items-center justify-content-center gap-5 mt-5 ">
                    <div class="">
                        <img src="https://imgs.search.brave.com/4x5d_jBcUus2o5Y0j5wfPIybmUKx7Cqu3OzxQCsO6yk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGVzaWdubWFudGlj/LmNvbS9pbWFnZXMv/aW5kdXN0cnkvdHJh/bnNwb3J0L2RtLXRy/YW5zcG9ydC1sb2dv/LTAyLnBuZw"
                            class="logo rounded-circle" width="80px" height="80px" alt="">
                    </div>
                    <div class="">
                        <img src="https://imgs.search.brave.com/4x5d_jBcUus2o5Y0j5wfPIybmUKx7Cqu3OzxQCsO6yk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGVzaWdubWFudGlj/LmNvbS9pbWFnZXMv/aW5kdXN0cnkvdHJh/bnNwb3J0L2RtLXRy/YW5zcG9ydC1sb2dv/LTAyLnBuZw"
                            class="logo rounded-circle" width="80px" height="80px" alt="">
                    </div>
                    <div class="">
                        <img src="https://imgs.search.brave.com/4x5d_jBcUus2o5Y0j5wfPIybmUKx7Cqu3OzxQCsO6yk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGVzaWdubWFudGlj/LmNvbS9pbWFnZXMv/aW5kdXN0cnkvdHJh/bnNwb3J0L2RtLXRy/YW5zcG9ydC1sb2dv/LTAyLnBuZw"
                            class="logo rounded-circle" width="80px" height="80px" alt="">
                    </div>
                    <div class="">
                        <img src="https://imgs.search.brave.com/4x5d_jBcUus2o5Y0j5wfPIybmUKx7Cqu3OzxQCsO6yk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGVzaWdubWFudGlj/LmNvbS9pbWFnZXMv/aW5kdXN0cnkvdHJh/bnNwb3J0L2RtLXRy/YW5zcG9ydC1sb2dv/LTAyLnBuZw"
                            class="logo rounded-circle" width="80px" height="80px" alt="">
                    </div>
                    <div class="">
                        <img src="https://imgs.search.brave.com/4x5d_jBcUus2o5Y0j5wfPIybmUKx7Cqu3OzxQCsO6yk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGVzaWdubWFudGlj/LmNvbS9pbWFnZXMv/aW5kdXN0cnkvdHJh/bnNwb3J0L2RtLXRy/YW5zcG9ydC1sb2dv/LTAyLnBuZw"
                            class="logo rounded-circle" width="80px" height="80px" alt="">
                    </div>
                </div>
            </div>
            <p class="mt-5 fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laboriosam
                quam
                quis odit unde! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laboriosam quam
                quis
                odit unde! Similique facere pariatur nesciunt aperiam quam quos ad! Adipisci molestiae inventore
                eligendi
                assumenda iste, odio possimus.</p>
            <div class="lh-1 pb-5">
                <p class="fs-5 mt-5 fw-semibold">Lui Maguire</p>
                <p class="fs-5 pb-5">CEO Transport ltd</p>
            </div>
        </div>
    </div>

    {{-- Tentang Kami --}}
    <div class="container text-start py-5">
        <div class="row py-5">
            <div class="col">
                <h1 class="fs-1 fw-bold">Tentang Kami</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi rem voluptates ab
                    magni fuga,
                    asperiores tempore consectetur error alias provident?</p>
                <div class="d-flex align-items-center justify-content-center gap-5">
                    <div class="badge bg-danger p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" />
                        </svg>
                    </div>
                    <div>
                        <p class="fs-5 fw-semibold mt-3">Alamat</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, praesentium.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-5">
                    <div class="badge bg-primary p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-phone">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
                        </svg>
                    </div>
                    <div>
                        <p class="fs-5 fw-semibold mt-3">Phone</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, praesentium.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-5">
                    <div class="badge bg-info p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                            <path
                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
                        </svg>
                    </div>
                    <div>
                        <p class="fs-5 fw-semibold mt-3">Alamat</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, praesentium.</p>
                    </div>
                </div>
            </div>
            <div class="col shadow-lg p-5 mb-5 bg-body-tertiary rounded m-5">
                <p class="text-uppercase fs-3 fw-semibold">testimoni anda?</p>
                <p>Isi dahulu form berikut!</p>
                <form>
                    <div class="d-flex align-items-start justify-content-start gap-3">
                        <div>
                            <div class="mb-4 ">
                                <input type="email" class="form-control bg-secondary-emphasis"
                                    id="exampleFormControlInput1" placeholder="Your Full Name">
                            </div>
                            <div class="mb-4 ">
                                <input type="email" class="form-control bg-secondary-emphasis"
                                    id="exampleFormControlInput1" placeholder="Your Email Address">
                            </div>
                            <div class="mb-4 ">
                                <input type="email" class="form-control bg-secondary-emphasis"
                                    id="exampleFormControlInput1" placeholder="Phone Number">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" cols="28"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I Agree to the <span class="text-danger">Terms and Conditions</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger pt-2"><span class="fw-medium">SEND
                                MESSAGE &gt;</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
