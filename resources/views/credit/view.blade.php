@extends("layouts.main")

@section("title")
    Kartu Kredit - Winery
@endsection

@section("content")
    <div class="container card-container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h5>Filter</h5>
                <form class="form" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <label for="bank">Bank</label>
                            <select id="bank" class="form-control" name="id_bank">
                                <option value="">Semua Bank</option>
                                @foreach($banks as $bank)
                                    <option value="{{ $bank->id }}" @if($filtered && $bank->id == $card->id_bank) selected @endif>{{ $bank->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="category">Kategori</label>
                            <select id="category" class="form-control" name="id_category">
                                <option value="">Semua Kategori</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($filtered && $category->id == $card->id_bank) selected @endif>{{ $category->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="type">Jenis Kartu</label>
                            <select id="type" class="form-control" name="id_type">
                                <option value="">Semua Jenis Kartu</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" @if($filtered && $type->id == $card->id_type) selected @endif>{{ $type->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="holder">Penghasilan</label>
                            <select id="holder" class="form-control" name="id_holder">
                                <option value="">Semua Penghasilan</option>
                                @foreach($holders as $holder)
                                    <option value="{{ $holder->id }}" @if($filtered && $holder->id == $card->id_holder) selected @endif>{{ $holder->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" id="applyFilter" class="btn btn-winery-3 btn-block float-right">Terapkan Filter</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
        <div class="row" id="check">
            @foreach($cards as $card)
                <div class="col-lg-3 mb-3">
                    <div class="card" style="min-height: 420px">
                        <img class="card-img-top img-fluid" src="{{ asset('img/cards/'.$card->gambar) }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card->nama }}</h5>
                            <h4 class="card-text">IDR {{ number_format($card->harga, 0, ',', '.') }}</h4>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="{{ url('kartu-kredit/detail/'.$card->id) }}" class="btn btn-winery-2 btn-block">Lihat Detail</a>
                            <a href="{{ url('kartu-kredit/ajukan/'.$card->id) }}" class="btn btn-winery-3 btn-block mt-2">Ajukan</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="w-100"></div>
            <div class="col-lg-12">
                {{ $cards->links() }}
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $('#applyFilter').click(function () {
                var bank = $('#bank').val();
                var category = $('#category').val();
                var type = $('#type').val();
                var holder = $('#holder').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('kartu-kredit/ajax') }}',
                    data: {
                        bank: bank,
                        category: category,
                        type: type,
                        holder: holder
                    },
                    success: function (data) {
                        $("#check").html(data);
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