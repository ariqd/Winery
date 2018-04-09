@extends("layouts.admin")

@section("title", "Semua Kartu Kredit")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }} Kartu Kredit</h1>
        <a href="{{ url('admin/cards') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Semua Kartu Kredit</a>
    </div>
    @if($edit)
        <form action="{{ url('admin/cards/manage/'.$card->id) }}" method="post" enctype="multipart/form-data">
    @else
        <form action="{{ url('admin/cards/manage') }}" method="post" enctype="multipart/form-data">
    @endif
        {{ csrf_field() }}
        <div class="form-group">
            <label for="credit_name">Nama Kartu Kredit</label>
            <input name="nama" class="form-control" id="credit_name" placeholder="Nama Kartu Kredit" value="@if($edit) {{ $card->nama }} @endif">
        </div>
        @if($edit)
            <img src="{{ asset('img/cards/'.$card->gambar) }}" alt="gambar" class="img-fluid">
            <div class="form-group mt-3">
                <label for="gambar">Ganti Gambar Kartu Kredit</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <small id="fileHelp" class="form-text text-muted">
                    Biarkan jika tidak diganti
                </small>
            </div>
        @else
            <div class="form-group">
                <label for="gambar">Gambar Kartu Kredit</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
        @endif
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi">@if($edit){!! $card->deskripsi !!}@endif</textarea>
        </div>
        <label for="harga">Iuran Tahunan</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="harga">Rp</span>
            </div>
            <input type="text" class="form-control" id="harga" name="harga" value="@if($edit) {{ $card->harga }} @endif">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="bank">Bank</label>
                    <select class="form-control" id="bank" name="id_bank">
                        @foreach($banks as $bank)
                            <option value="{{ $bank->id }}" @if($edit && $bank->id == $card->id_bank) selected @endif>{{ $bank->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="bank">Kategori</label>
                    <select class="form-control" id="kategori" name="id_category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($edit && $category->id == $card->id_category) selected @endif>{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="bank">Jenis Kartu</label>
                    <select class="form-control" id="tipe" name="id_type">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" @if($edit && $type->id == $card->id_type) selected @endif>{{ $type->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="bank">Penghasilan</label>
                    <select class="form-control" id="pekerjaan" name="id_holder">
                        @foreach($holders as $holder)
                            <option value="{{ $holder->id }}" @if($edit && $holder->id == $card->id_holder) selected @endif>{{ $holder->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h4>Dokumen</h4>
            </div>
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
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
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="ktp_karyawan" class="custom-control-input"
                                       id="ktp_karyawan" @if($edit && $card->document->ktp_karyawan) checked @endif>
                                <label class="custom-control-label" for="ktp_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="ktp_wirausaha" class="custom-control-input"
                                       id="ktp_wirausaha" @if($edit && $card->document->ktp_wirausaha) checked @endif>
                                <label class="custom-control-label" for="ktp_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="ktp_profesional" class="custom-control-input"
                                       id="ktp_profesional" @if($edit && $card->document->ktp_profesional) checked @endif>
                                <label class="custom-control-label" for="ktp_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Bukti Penghasilan (Slip Gaji/SKP/SPT)</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="penghasilan_karyawan" class="custom-control-input"
                                       id="penghasilan_karyawan" @if($edit && $card->document->penghasilan_karyawan) checked @endif>
                                <label class="custom-control-label" for="penghasilan_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="penghasilan_wirausaha" class="custom-control-input"
                                       id="penghasilan_wirausaha" @if($edit && $card->document->penghasilan_wirausaha) checked @endif>
                                <label class="custom-control-label" for="penghasilan_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="penghasilan_profesional" class="custom-control-input"
                                       id="penghasilan_profesional" @if($edit && $card->document->penghasilan_profesional) checked @endif>
                                <label class="custom-control-label" for="penghasilan_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fotokopi Rekening Tabungan (2 bln terakhir)</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="tabungan_karyawan" class="custom-control-input"
                                       id="tabungan_karyawan" @if($edit && $card->document->tabungan_karyawan) checked @endif>
                                <label class="custom-control-label" for="tabungan_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="tabungan_wirausaha" class="custom-control-input"
                                       id="tabungan_wirausaha" @if($edit && $card->document->tabungan_wirausaha) checked @endif>
                                <label class="custom-control-label" for="tabungan_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="tabungan_profesional" class="custom-control-input"
                                       id="tabungan_profesional" @if($edit && $card->document->tabungan_profesional) checked @endif>
                                <label class="custom-control-label" for="tabungan_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fotokopi Surat Izin Profesi</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="izin_karyawan" class="custom-control-input"
                                       id="izin_karyawan" @if($edit && $card->document->izin_karyawan) checked @endif>
                                <label class="custom-control-label" for="izin_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="izin_wirausaha" class="custom-control-input"
                                       id="izin_wirausaha" @if($edit && $card->document->izin_wirausaha) checked @endif>
                                <label class="custom-control-label" for="izin_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="izin_profesional" class="custom-control-input"
                                       id="izin_profesional" @if($edit && $card->document->izin_profesional) checked @endif>
                                <label class="custom-control-label" for="izin_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="npwp_karyawan" class="custom-control-input"
                                       id="npwp_karyawan" @if($edit && $card->document->npwp_karyawan) checked @endif>
                                <label class="custom-control-label" for="npwp_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="npwp_wirausaha" class="custom-control-input"
                                       id="npwp_wirausaha" @if($edit && $card->document->npwp_wirausaha) checked @endif>
                                <label class="custom-control-label" for="npwp_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="npwp_profesional" class="custom-control-input"
                                       id="npwp_profesional" @if($edit && $card->document->npwp_profesional) checked @endif>
                                <label class="custom-control-label" for="npwp_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fotokopi Akta Pendirian/SIUP/TDP</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="pendirian_karyawan" class="custom-control-input"
                                       id="pendirian_karyawan" @if($edit && $card->document->pendirian_karyawan) checked @endif>
                                <label class="custom-control-label" for="pendirian_karyawan"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="pendirian_wirausaha" class="custom-control-input"
                                       id="pendirian_wirausaha" @if($edit && $card->document->pendirian_wirausaha) checked @endif>
                                <label class="custom-control-label" for="pendirian_wirausaha"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" name="pendirian_profesional" class="custom-control-input"
                                       id="pendirian_profesional" @if($edit && $card->document->pendirian_profesional) checked @endif>
                                <label class="custom-control-label" for="pendirian_profesional"></label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit" class="btn btn-winery-3 btn-block my-4"><i class="fa fa-check"></i> Simpan</button>
    </form>
@endsection