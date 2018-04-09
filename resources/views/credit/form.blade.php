@extends("layouts.main")

@section("title")
    Ajukan Kredit {{ $card->nama }} - Winery
@endsection

@section("content")
    <div class="container card-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6 offset-lg-3">
                    <h3 style="color: #4B2C76;">Pengajuan Kartu Kredit {{ $card->nama }}</h3>
                    <hr>
                    <form action="{{ url('kartu-kredit/ajukan/go/'.$card->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat lengkap Anda">
                        </div>
                        <div class="form-group">
                            <label for="notelp">No. Telepon</label>
                            <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telp Anda">
                        </div>
                        <div class="form-group">
                            <label for="tempat-tinggal">Dimana tempat tinggal Anda ?</label>
                            <select class="form-control" id="tempat-tinggal" name="kota">
                                <option selected disabled>Pilih Kota</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Depok">Depok</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Serang">Serang</option>
                                <option value="Tangerang Selatan">Tangerang Selatan</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Bali">Bali</option>
                                <option value="Medan">Medan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat-tinggal">Kapan Anda lahir ?</label>
                            <div class="form-row">
                                <div class="col-lg">
                                    <select class="form-control" id="tanggal" name="lahir_tgl">
                                        <option value="" disabled selected>Tanggal</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-lg">
                                    <select class="form-control" id="bulan" name="lahir_bln">
                                        <option value="" disabled selected>Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-lg">
                                    <select class="form-control" id="tahun" name="lahir_thn">
                                        <option value="" disabled selected>Tahun</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penghasilan">Berapa penghasilan Anda perbulan ?</label>
                            <select name="penghasilan" id="penghasilan" class="form-control">
                                <option value="" selected disabled>Pilih Penghasilan</option>
                                <option value="0-2999999">Di bawah Rp 3.000.000</option>
                                <option value="3000000-3999999">Rp 3.000.000 sampai Rp 3.999.999</option>
                                <option value="4000000-4999999">Rp 4.000.000 sampai Rp 4.999.999</option>
                                <option value="5000000-7999999">Rp 5.000.000 sampai Rp 7.999.999</option>
                                <option value="8000000-9999999">Rp 8.000.000 sampai Rp 9.999.999</option>
                                <option value="10000000-10999999">Rp 10.000.000 sampai Rp 10.999.999</option>
                                <option value="11000000-14999999">Rp 11.000.000 sampai Rp 14.999.999</option>
                                <option value="15000000-19999999">Rp 15.000.000 sampai Rp 19.999.999</option>
                                <option value="20000000-Infinity">Di atas 20.000.000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penghasilan">Apakah Pekerjaan Anda ?</label>
                            <select name="pekerjaan" id="pekerjaan" class="form-control">
                                <option value="" selected disabled>Pilih Jenis Pekerjaan</option>
                                <option value="Pegawai BUMN">Pegawai BUMN</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="TNI/Polri">TNI/Polri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penghasilan">Apakah Anda sudah memiliki Kartu Kredit ?</label>
                            <input type="text" class="form-control" name="bank" id="bank_name" placeholder="Filter nama bank">
                            <div class="form-row pt-3" id="checkName">
                                @foreach($banks as $bank)
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input bank" type="checkbox" name="bank[]" value="{{ $bank->nama }}" id="{{ $bank->nama }}">
                                        <label class="form-check-label" for="{{ $bank->nama }}">
                                            <img src="{{ asset('img/bank/'.$bank->gambar) }}" alt="winery-{{$bank->nama}}" class="bank-img">
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input other" type="checkbox" name="bank[]" value="lainnya" id="other">
                                        <label class="form-check-label" for="other">
                                            <img src="{{ asset('img/bank/other.png') }}" alt="winery-other" class="bank-img">
                                        </label>
                                        Lainnya
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input none" type="checkbox" name="bank[]" value="tidak ada" id="none">
                                        <label class="form-check-label" for="none">
                                            <img src="{{ asset('img/bank/none.png') }}" alt="winery-none" class="bank-img">
                                        </label>
                                        Tidak ada
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-winery-3 btn-block" data-toggle="modal" data-target="#ajukan">Ajukan</button>
                        <!-- Insert Bank Modal -->
                        <div class="modal fade" id="ajukan" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bankLabel">Konfirmasi Pengajuan Kredit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{--<div class="text-center">--}}
                                            {{--<img src="{{ asset('img/bank/'.$card->bank->gambar) }}">--}}
                                        {{--</div>--}}
                                        Anda akan dihubungi oleh pihak Winery selambat-lambatnya 3x24 jam
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-winery-3">Ajukan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $('#bank_name').keyup(function () {
                var searchTerm = ($(this).val());
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('kartu-kredit/ajukan/ajax/') }}',
                    data: {nama: searchTerm},
                    success: function (data) {
                        $("#checkName").html(data);
                    },
                    error: function (xhr) {
                        //Do Something to handle error
                        alert("some error found");
                    }
                });
            })
        })
    </script>
@endsection