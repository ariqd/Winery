@extends("layouts.admin")

@section("title")
    Edit {{ $bank->nama }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Bank {{ $bank->nama }}</h1>
    </div>
    <form action="{{ url('admin/setting/bank/'.$bank->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_bank">Nama Bank</label>
            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_bank" placeholder="Nama Bank" value="{{ $bank->nama }}">
        </div>
        <img src="{{ asset('img/bank/'.$bank->gambar) }}" alt="gambar" class="img-fluid">
        <div class="form-group mt-3">
            <label for="gambar">Ganti Logo Bank</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
            <small id="fileHelp" class="form-text text-muted">
                Biarkan jika tidak diganti
            </small>
        </div>
        <div class="form-group">
            <label for="deskripsi_bank">Deskripsi Bank</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi_bank" rows="7" placeholder="Deskripsi Bank">{{ $bank->deskripsi }}</textarea>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ url('/admin/setting') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Setting</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        </div>
    </form>
@endsection