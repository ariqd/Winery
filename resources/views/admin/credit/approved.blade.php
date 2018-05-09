@extends("layouts.admin")

@section("title", "Pengajuan Kredit : Request")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="/h2">Pengajuan Kredit : Approved</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ url('admin/submissions/export/approved') }}" class="btn btn-secondary mb-3">Export All to Excel</a>
            <button type="button" data-toggle="modal" data-target="#datsys" class="btn btn-secondary mb-3">Download Datsys</button>
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
                    <th></th>
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
                        <td>
                            <a href="{{ route('approved.export', $submission->id) }}" class="btn btn-secondary"><i class="fa fa-arrow-down"></i> Download</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="datsys" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Download Datsys</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/submissions/export_datsys') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="status" value="approved">
                        <div class="form-group">
                            <label for="datsysBank">Pilih Bank</label>
                            <select class="form-control" id="datsysBank" name="bank_id">
                                @foreach($banks as $bank_id => $bank_name)
                                    <option value="{{ $bank_id }}">{{ $bank_name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Download Datsys untuk Bank ini</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
