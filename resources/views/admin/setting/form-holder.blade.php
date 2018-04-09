@extends("layouts.admin")

@section("title")
    Edit {{ $holder->nama }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit {{ $holder->nama }}</h1>
        {{--<a href="{{ url('/admin/setting') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Setting</a>--}}
    </div>
    <form action="{{ url('admin/setting/holder/'.$holder->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_holder">Nama Pemegang Kartu</label>
            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_holder" placeholder="Nama Pemegang Kartu" value="{{ $holder->nama }}">
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ url('/admin/setting') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Setting</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        </div>
    </form>
@endsection