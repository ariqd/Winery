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
            <div class="modal fade" id="card{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteLabel">Hapus Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus Artikel "{{ $article->title }}" ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="{{ url('admin/cards/delete/'.$article->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection