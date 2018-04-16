@extends("layouts.admin")

@section("title", "Pengajuan Kredit : Verifikasi")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Verifikasi Pengajuan Kartu Kredit</h1>
        <a href="{{ url('admin/requests') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Semua Pengajuan</a>
    </div>
    <form action="">

        <div class="form-group row">
            <label for="nama" class="col-sm-2">Nama Lengkap (Sesuai KTP / Paspor)</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="namakartu" class="col-sm-2">Nama Pada Kartu (Sesuai KTP / Paspor)</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namakartu" name="namakartu" placeholder="Nama pada kartu" required>
                <small id="emailHelp" class="form-text text-muted">Maksimal 19 digit.</small>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2">No. KTP / Paspor</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="No. KTP / Paspor" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="kewarganegaraan" class="col-sm-2">Kewarganegaraan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="kewarganegaraan" class="col-sm-2">Pendidikan Terakhir</label>
            <div class="col-sm-9">
                {{--<input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>--}}
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="sd" value="SD">
                    <label class="form-check-label" for="sd">SD</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="smp" value="SMP">
                    <label class="form-check-label" for="smp">SMP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="sma" value="SMA">
                    <label class="form-check-label" for="sma">SMA</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="diploma" value="DIPLOMA">
                    <label class="form-check-label" for="diploma">DIPLOMA</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="s1" value="S1">
                    <label class="form-check-label" for="s1">S1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pendidikan" id="lainnya" value="Lainnya">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>
        </div>
    </form>
@endsection