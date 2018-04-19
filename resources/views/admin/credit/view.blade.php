@extends("layouts.admin")

@section("title", "Semua Kartu Kredit")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Kartu Kredit</h1>
        <a href="{{ url('admin/cards/add') }}" class="btn btn-winery-3"><i class="fa fa-plus"></i> Tambah Kartu Kredit Baru</a>
    </div>
    <div class="row mb-3">
        <div class="col-lg-12">
            <input type="text" class="form-control" name="card" id="card_name" placeholder="Cari nama kartu...">
        </div>
    </div>
    <div class="row" id="checkName">
        @foreach($cards as $card)
        <div class="col-lg-3 mb-3">
            <div class="card" style="min-height: 380px;">
                <img class="card-img-top img-fluid" src="{{ asset('img/cards/'.$card->gambar) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $card->nama }}</h5>
                    <h3 class="card-text">IDR {{ number_format($card->harga, 0, ',', '.') }}</h3>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('kartu-kredit/detail', $card->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                        <a href="{{ url('admin/cards/edit/'.$card->id) }}" class="btn btn-winery-3 btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#card{{$card->id}}"><i class="fa fa-trash"></i> Hapus</button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="card{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteLabel">Hapus {{ $card->nama }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus kartu kredit {{ $card->nama }} ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="{{ url('admin/cards/delete/'.$card->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="w-100"></div>
        <div class="col-lg-12">
            {{ $cards->links() }}
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $('#card_name').keyup(function () {
                var searchTerm = ($(this).val());
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('admin/cards/search') }}',
                    data: {nama: searchTerm},
                    success: function (data) {
                        $("#checkName").html(data);
                    },
                    error: function (xhr) {
                        //Do Something to handle error
                        alert("some error found");
                    }
                });
            })
        })
    </script>
@endsection