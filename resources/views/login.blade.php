<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/icons/arjuna-trans.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Arjuna - Trans || Login</title>
</head>
<body>
    <div class="gradient">

        <div class="container-fluid p-0 m-0">
            <div class="coverbg">
                <img src="{{ asset('assets/img/bg1.png') }}" class="motif">
                <img src="{{ asset('assets/img/bg2.png') }}" class="motif1">
                <img src="{{ asset('assets/img/garisBg.png') }}" class="garis">
                <img src="{{ asset('assets/img/polygon.png') }}" class="polygon">
            </div>

            <div class="card user-login shadow" style="position: absolute">
                <div class="card-body p-0">
                    <div class="row justify-content-center">
                        <div class="col-md-7 d-none d-md-block bg-card">
                           <img src="{{ asset('assets/icons/arjuna-trans1.png') }}" class="icn-logo">
                           <img src="{{ asset('assets/img/1.png') }}" class="icn-mobil">
                        </div>
                        
                        <div class="col-md-5 p-5">

                            <div class="d-flex justify-content-end">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Id
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Amerika Serikat</a></li>
                                        <li><a class="dropdown-item" href="#">Inggris</a></li>
                                        <li><a class="dropdown-item" href="#">Australia</a></li>
                                        <li><a class="dropdown-item" href="#">India</a></li>
                                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                                        <li><a class="dropdown-item" href="#">China</a></li>
                                        <li><a class="dropdown-item" href="#">Jepang</a></li>
                                        <!-- Tambahkan lebih banyak negara sesuai kebutuhan -->
                                    </ul>
                                </div>
                            </div>

                            <h1><b>Masuk</b></h1>
                            <p><b>Gunakan username dan password anda!</b></p>
                            <form>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <img src="/assets/icons/SVG.svg" alt="Icon" width="25" height="25">
                                        </span>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                </div>
                                
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <img src="/assets/icons/Form.svg" alt="Icon" width="25" height="25">
                                        </span>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                    </div>
                                </div>
                                
                                <div class="mb-2 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label custom-text-color" for="exampleCheck1">Subscribe to weekly newsletter</label>
                                </div>

                                <button type="submit" class="btn w-100 text-white btn-gradient">Masuk</button>
                            </form>
                            <div class="or mt-3">
                                <img src="{{ asset('assets/img/or.png') }}" alt="">
                            </div>

                            <div class="mediasosial mt-3">
                                <div class="icon-circle">
                                    <i class="bi bi-instagram"></i>
                                </div>
                                <div class="icon-circle">
                                    <i class="bi bi-facebook"></i>
                                </div>
                                <div class="icon-circle">
                                    <i class="bi bi-twitter"></i>
                                </div>
                                <div class="icon-circle">
                                    <i class="bi bi-google"></i>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            

        </div> 

    </div>
        

      
        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>