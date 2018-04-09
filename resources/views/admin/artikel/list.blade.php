@extends("layouts.admin")

@section("title")
    Artikel
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Artikel</h1>
        <a href="{{ url('admin/cards/add') }}" class="btn btn-winery-3"><i class="fa fa-plus"></i> Tambah Artikel Baru</a>
    </div>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-3 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('img/artikel/'.$article->image1) }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ url('kartu-kredit/detail', $article->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                            <a href="{{ url('admin/cards/edit/'.$article->id) }}" class="btn btn-winery-3 btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#card{{$article->id}}"><i class="fa fa-trash"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection