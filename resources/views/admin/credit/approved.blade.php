@extends("layouts.admin")

@section("title", "Pengajuan Kredit : Request")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="/h2">Pengajuan Kredit : Approved</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-responsive" id="myTable">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nama Kartu</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Kota</th>
                    <th>Umur</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan</th>
                    <th>Pernah Dimiliki</th>
                </tr>
                </thead>
                <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td>{{ $submission->nama }}</td>
                        <td>{{ $submission->card->nama }}</td>
                        <td>{{ $submission->created_at->toFormattedDateString() }}</td>
                        <td>{{ $submission->alamat }}</td>
                        <td>{{ $submission->notelp }}</td>
                        <td>{{ $submission->tinggal }}</td>
                        <td>{{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse($submission->tgl_lahir)) }}</td>
                        <td>{{ $submission->pekerjaan }}</td>
                        <td>{{ $submission->penghasilan }}</td>
                        <td>{{ $submission->owned }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection