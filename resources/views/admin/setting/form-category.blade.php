@extends("layouts.admin")

@section("title")
    Edit {{ $category->nama }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori {{ $category->nama }}</h1>
    </div>
    <form action="{{ url('admin/setting/category/'.$category->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_kategori" placeholder="Nama Kategori" value="{{ $category->nama }}">
        </div>
        <div class="form-group">
            <label for="deskripsi_kategori">Deskripsi Kategori</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi_kategori" rows="7" placeholder="Deskripsi Kategori">{{ $category->deskripsi }}</textarea>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ url('/admin/setting') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Setting</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        </div>
    </form>
@endsection