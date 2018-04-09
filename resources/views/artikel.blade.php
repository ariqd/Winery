@extends("layouts.main")

@section("title")
    Artikel - Winery
@endsection

@section("content")
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:#212121">Artikel</h1>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('img/artikel/artikel1.jpg') }}" alt="winery-arikel" class="img-fluid mt-3">
                <h4 class="mt-3">Judul yang sangat panjang</h4>
                <a href="{{ url('artikel/{id}') }}" class="btn btn-winery-3 mt-3">Read More...</a>
            </div>
        </div>
    </div>
@endsection