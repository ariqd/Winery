@extends("layouts.admin")

@section("title", "Pengajuan Kredit : Verifikasi")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Verifikasi Pengajuan Kartu Kredit</h1>
        <a href="{{ url('admin/requests') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Semua Pengajuan</a>
    </div>
    <form action="{{ route('admin.verifies', $submission->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-lg-2">Nama Lengkap (Sesuai KTP / Paspor)</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" readonly value="{{ $submission->nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_di_kartu" class="col-lg-2">Nama Pada Kartu (Sesuai KTP / Paspor)</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="nama_di_kartu" name="nama_di_kartu" placeholder="Nama pada kartu" required>
                <small id="nama_di_kartu" class="form-text text-muted">Maksimal 19 digit.</small>
            </div>
        </div>

        <div class="form-group row">
            <label for="ktp" class="col-lg-2">No. KTP / Paspor</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="ktp" name="ktp" placeholder="No. KTP / Paspor" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="kewarganegaraan" class="col-lg-2">Kewarganegaraan</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="pendidikan" class="col-lg-2">Pendidikan Terakhir</label>
            <div class="col-lg-8">
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

        <div class="form-group row">
            <label for="status_tinggal" class="col-lg-2">Status tempat tinggal saat ini</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_tinggal" id="sendiri" value="Milik Sendiri">
                    <label class="form-check-label" for="sendiri">Milik Sendiri</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_tinggal" id="keluarga" value="Milik Keluarga">
                    <label class="form-check-label" for="keluarga">Milik Keluarga</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_tinggal" id="perusahaan" value="Milik Perusahaan">
                    <label class="form-check-label" for="perusahaan">Milik Perusahaan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_tinggal" id="lainnya" value="Lainnya">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-lg-2">Alamat tempat tinggal saat ini</label>
            <div class="col-lg-8">
                <textarea name="alamat" id="alamat" rows="5" class="form-control" placeholder="Alamat" readonly>{{ $submission->alamat }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="kota" class="col-lg-2">Kota</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="{{ $submission->tinggal }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="telp_rumah" class="col-lg-4">No. Telepon Rumah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="telp_rumah" id="telp_rumah" placeholder="No. Telepon rumah">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="telp_hp" class="col-lg-2">No. HP</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="telp_hp" id="telp_hp" placeholder="No. HP">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-lg-2">Alamat e-mail</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="Alamat e-mail" value="{{ $submission->email }}" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="ibu" class="col-lg-2">Nama gadis ibu kandung</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="ibu" id="ibu" placeholder="Nama gadis ibu kandung">
            </div>
        </div>

        <div class="form-group row">
            <label for="npwp" class="col-lg-2">NPWP</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="npwp" id="npwp" placeholder="NPWP">
            </div>
        </div>

        <div class="form-group row">
            <label for="dikirim_dari" class="col-lg-2">Kartu dikirim dari</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dikirim_dari" id="rumah" value="Rumah">
                    <label class="form-check-label" for="rumah">Rumah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dikirim_dari" id="kantor" value="Kantor">
                    <label class="form-check-label" for="kantor">Kantor</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="tagihan_ke" class="col-lg-2">Tagihan dikirim ke</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tagihan_ke" id="email_tagihan" value="E-Mail">
                    <label class="form-check-label" for="email_tagihan">E-Mail</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tagihan_ke" id="rumah_tagihan" value="Rumah">
                    <label class="form-check-label" for="rumah_tagihan">Rumah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tagihan_ke" id="kantor_tagihan" value="Kantor">
                    <label class="form-check-label" for="kantor_tagihan">Kantor</label>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-2">
            <div class="col-lg-12">
                <h5>Data pekerjaan dan penghasilan</h5>
            </div>
        </div>

        <div class="form-group row">
            <label for="pekerjaan" class="col-lg-2">Pekerjaan</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" readonly value="{{ $submission->pekerjaan }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_perusahaan" class="col-lg-2">Nama Perusahaan</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan">
            </div>
        </div>

        <div class="form-group row">
            <label for="bidang" class="col-lg-2">Bidang Usaha</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Bidang Usaha">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat_kantor" class="col-lg-2">Alamat Kantor</label>
            <div class="col-lg-8">
                <textarea name="alamat_kantor" id="alamat_kantor" class="form-control" rows="5" placeholder="Alamat Kantor"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="kota_kantor" class="col-lg-2">Kota</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="kota_kantor" id="kota_kantor" placeholder="Kota">
            </div>
        </div>

        <div class="form-group row">
            <label for="kode_pos_kantor" class="col-lg-2">Kode Pos</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="kode_pos_kantor" id="kode_pos_kantor" placeholder="Kode Pos">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="telp_kantor" class="col-lg-4">Telepon Kantor</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="telp_kantor" id="telp_kantor" placeholder="Telepon Kantor">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="extension" class="col-lg-2">Extension</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="extension" id="extension" placeholder="Extension">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="jabatan" class="col-lg-4">Jabatan</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="bagian" class="col-lg-2">Bagian</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="bagian" id="bagian" placeholder="Bagian">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="bekerja_sejak" class="col-lg-2">Usaha / Bekerja sejak</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="bekerja_sejak" id="bekerja_sejak" placeholder="Usaha / Bekerja sejak">
            </div>
        </div>

        <div class="form-group row">
            <label for="penghasilan" class="col-lg-2">Penghasilan</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="penghasilan" id="penghasilan" placeholder="Penghasilan" readonly value="{{ $submission->penghasilan }}">
            </div>
        </div>

        <div class="row mt-5 mb-2">
            <div class="col-lg-12">
                <h5>Keluarga Dekat Tidak Serumah yang Dapat Dihubungi Dalam Keadaan Darurat
                </h5>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_keluarga" class="col-lg-2">Nama</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nama_keluarga" id="nama_keluarga" placeholder="Nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="hubungan" class="col-lg-2">Hubungan</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hubungan" id="saudara" value="Saudara Kandung">
                    <label class="form-check-label" for="saudara">Saudara Kandung</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hubungan" id="anak" value="Anak">
                    <label class="form-check-label" for="anak">Anak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hubungan" id="orangtua" value="Orang Tua">
                    <label class="form-check-label" for="orangtua">Orang Tua</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hubungan" id="sepupu" value="Sepupu">
                    <label class="form-check-label" for="sepupu">Sepupu</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hubungan" id="lainnya_hubungan" value="Lainnya">
                    <label class="form-check-label" for="lainnya_hubungan">Lainnya</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat_keluarga" class="col-lg-2">Alamat tempat tinggal saat ini</label>
            <div class="col-lg-8">
                <textarea name="alamat_keluarga" id="alamat_keluarga" class="form-control" rows="5" placeholder="Alamat tempat tinggal saat ini"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="kota_keluarga" class="col-lg-4">Kota</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="kota_keluarga" id="kota_keluarga" placeholder="Kota">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="kode_pos_keluarga" class="col-lg-2">Kode Pos</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="kode_pos_keluarga" id="kode_pos_keluarga" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="telp_rumah_keluarga" class="col-lg-4">No. Telepon Rumah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="telp_rumah_keluarga" id="telp_rumah_keluarga" placeholder="No. Telepon rumah">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="telp_hp_keluarga" class="col-lg-2">No. HP</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="telp_hp_keluarga" id="telp_hp_keluarga" placeholder="No. HP">
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row mt-4 mb-2">--}}
            {{--<div class="col-lg-12">--}}
                {{--<h5>Data kartu kredit lainnya</h5>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="row mt-4 mb-2">
            <div class="col-lg-12">
                <h5>Data pengajuan Loan (Hanya untuk WNI)</h5>
            </div>
        </div>

        <div class="form-group row">
            <label for="jml_pinjaman" class="col-lg-2">Jumlah pinjaman yang diajukan</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="jml_pinjaman" id="jml_pinjaman" placeholder="Jumlah pinjaman yang diajukan">
            </div>
        </div>

        <div class="form-group row">
            <label for="jangka" class="col-lg-2">Jangka waktu pinjaman (bulan)</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jangka" id="12" value="12">
                    <label class="form-check-label" for="12">12</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jangka" id="24" value="24">
                    <label class="form-check-label" for="24">24</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jangka" id="36" value="36">
                    <label class="form-check-label" for="36">36</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jangka" id="48" value="48">
                    <label class="form-check-label" for="48">48</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="peruntukan" class="col-lg-2">Peruntukan penggunaan</label>
            <div class="col-lg-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="peruntukan" id="pendidikan" value="Pendidikan">
                    <label class="form-check-label" for="pendidikan">Pendidikan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="peruntukan" id="renovasi-rumah" value="Renovasi Rumah">
                    <label class="form-check-label" for="renovasi-rumah">Renovasi Rumah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="peruntukan" id="liburan" value="Liburan">
                    <label class="form-check-label" for="liburan">Liburan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="peruntukan" id="lainnya_peruntukan" value="Lainnya">
                    <label class="form-check-label" for="lainnya_peruntukan">Lainnya</label>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-2">
            <div class="col-lg-12">
                <h5>Dana pencairan pinjaman Loan agar dicairkan/ditransfer ke rekening saya, dengan informasi sebagai berikut :</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="bank_loan" class="col-lg-4">Bank</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="bank_loan" id="bank_loan" placeholder="Bank">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="atas_nama" class="col-lg-3">Atas Nama</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="atas_nama" id="atas_nama" placeholder="Atas Nama">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="norek_loan" class="col-lg-4">No. Rekening</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="norek_loan" id="norek_loan" placeholder="No. Rekening">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="cabang_loan" class="col-lg-3">Cabang</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="cabang_loan" id="cabang_loan" placeholder="Cabang">
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-winery-3 my-3"><i class="fa fa-check"></i> Verifikasi</button>

    </form>
@endsection