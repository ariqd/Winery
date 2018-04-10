@extends("layouts.main")

@section("title")
    {{ $card->nama }} - Winery
@endsection

@section("content")
    <div class="container card-container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('img/cards/'.$card->gambar) }}" alt="{{ $card->gambar }}" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <h1>{{ $card->nama }}</h1>
                <h4>IDR {{ number_format($card->harga) }}</h4>
                <h5>Kategori {{ $card->category->nama }}</h5>
                <hr>
                <p>
                    {{--{!! $card->deskripsi !!}--}}
                    {!! $card->deskripsi !!}
                </p>
                <hr>
                @if($card->document)
                    <table class="table table-bordered text-center">
                        <thead style="background-color:#4B2C76;color:#fff">
                        <tr>
                            <th>Dokumen/Jenis Pekerjaan</th>
                            <th>Karyawan</th>
                            <th>Wirausaha</th>
                            <th>Profesional</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fotokopi KTP/KITAS</td>
                            <td>
                                @if($card->document->ktp_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->ktp_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->ktp_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Penghasilan (Slip Gaji/SKP/SPT)</td>
                            <td>
                                @if($card->document->penghasilan_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->penghasilan_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->penghasilan_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fotokopi Rekening Tabungan (2 bln terakhir)</td>
                            <td>
                                @if($card->document->tabungan_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->tabungan_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->tabungan_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fotokopi Surat Izin Profesi</td>
                            <td>
                                @if($card->document->izin_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->izin_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->izin_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td>
                                @if($card->document->npwp_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->npwp_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->npwp_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fotokopi Akta Pendirian/SIUP/TDP</td>
                            <td>
                                @if($card->document->pendirian_karyawan)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->pendirian_wirausaha)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($card->document->pendirian_profesional)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-close text-danger"></i>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endif
                <a href="{{ url('kartu-kredit/ajukan/'.$card->id) }}" class="btn btn-winery-3 btn-block mt-5">Ajukan</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <h5>Produk Terkait</h5>
                <hr>
            </div>
            @forelse($related as $card)
                <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ asset('img/cards/'.$card->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card->nama }}</h5>
                            <h3 class="card-text">IDR {{ number_format($card->harga, 0, ',', '.') }}</h3>
                            <a href="{{ url('kartu-kredit/detail/'.$card->id) }}" class="btn btn-winery-2 btn-block mt-3">Lihat Detail</a>
                            <a href="{{ url('kartu-kredit/ajukan/'.$card->id) }}" class="btn btn-winery-3 btn-block mt-3">Ajukan</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <h5 class="p-3 text-secondary text-center">Tidak ada produk terkait</h5>
                </div>
            @endforelse
        </div>
    </div>
@endsection