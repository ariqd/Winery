@extends("layouts.admin")

@section("title", "Pengajuan Kredit : Request")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengajuan Kredit : Pending</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="myTable2">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nama Kartu</th>
                    <th>Tanggal Pengajuan</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td>{{ $submission->nama }}</td>
                        <td>{{ $submission->card->nama }}</td>
                        <td>{{ $submission->created_at->toFormattedDateString() }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detail{{$submission->id}}"><i class="fa fa-eye"></i> Verify</button>
                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#approve{{$submission->id}}"><i class="fa fa-check"></i> Approve</button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#decline{{$submission->id}}"><i class="fa fa-close"></i> Decline</button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="detail{{$submission->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteLabel">Detail Pengajuan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <b>Data Diri</b>
                                        </div>
                                        <div class="col-2">
                                            Nama:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->nama }}
                                        </div>
                                        <div class="col-2">
                                            Email:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->email }}
                                        </div>
                                        <div class="col-2">
                                            Alamat:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->alamat }}
                                        </div>
                                        <div class="col-2">
                                            Telp:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->notelp }}
                                        </div>
                                        <div class="col-2">
                                            Penghasilan:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->penghasilan }}
                                        </div>
                                        <div class="col-2">
                                            Pekerjaan:
                                        </div>
                                        <div class="col-10">
                                            {{ $submission->pekerjaan }}
                                        </div>
                                        <div class="col-12">
                                            Kartu Kredit yang pernah dimiliki: {{ $submission->owned }}
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <b>Detail Kartu</b>
                                        </div>
                                        <div class="col-10">
                                            {{--{{ $submission->card- }}--}}
                                            <img src="{{ asset('img/cards/'.$submission->card->gambar) }}" class="img-fluid py-3">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-3">
                                            Nama Kartu:
                                        </div>
                                        <div class="col-9">
                                            {{ $submission->card->nama }}
                                        </div>
                                        <div class="col-3">
                                            Bank:
                                        </div>
                                        <div class="col-9">
                                            {{ $submission->card->bank->nama }}
                                        </div>
                                        <div class="col-3">
                                            Kategori:
                                        </div>
                                        <div class="col-9">
                                            {{ $submission->card->category->nama }}
                                        </div>
                                        <div class="col-3">
                                            Jenis Kartu:
                                        </div>
                                        <div class="col-9">
                                            {{ $submission->card->type->nama }}
                                        </div>
                                        <div class="col-3">
                                            Pekerjaan:
                                        </div>
                                        <div class="col-9">
                                            {{ $submission->card->holder->nama }}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="approve{{$submission->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteLabel">Setujui Pengajuan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Setujui pengajuan kredit {{ $submission->nama }} untuk kartu {{ $submission->card->nama }} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="{{ url('admin/requests/approve/'.$submission->id) }}" class="btn btn-success"><i class="fa fa-check"></i> Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="decline{{$submission->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteLabel">Tolak Pengajuan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tolak dan hapus pengajuan kredit {{ $submission->nama }} untuk kartu {{ $submission->card->nama }} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="{{ url('admin/requests/decline/'.$submission->id) }}" class="btn btn-danger"><i class="fa fa-check"></i> Decline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection