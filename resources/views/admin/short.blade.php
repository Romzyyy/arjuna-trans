@extends('layouts.adminSide')

@section('navcontent')
    <main class="col-md-10 ms-sm-auto px-md-4 content">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Short Video</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus"></i> Video Baru
                </button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Repeat this card for each video -->
            <div class="col">
                <div class="card video-card">
                    <img src="image/youtube.png" class="card-img-top" alt="Video thumbnail">
                    <div class="play-icon">
                        <i class="fas fa-play-circle"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat the card here for more videos -->
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Lebih banyak</button>
        </div>
    </main>
@endsection()
