<table>
    <tbody>
    <tr>
        <td>Nama Lengkap :</td>
        <td>{{ $verification->nama }}</td>
    </tr>
    <tr>
        <td>Nama pada Kartu :</td>
        <td>{{ $verification->nama_di_kartu }}</td>
    </tr>
    <tr>
        <td>No. KTP/Paspor :</td>
        <td>{{ $verification->ktp }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir :</td>
        <td>{{ $verification->tgl_lahir }}</td>
    </tr>
    <tr>
        <td>Tempat Lahir :</td>
        <td>{{ $verification->tempat_lahir }}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan :</td>
        <td>{{ $verification->kewarganegaraan }}</td>
    </tr>
    <tr>
        <td>Pendidikan terakhir :</td>
        <td>{{ $verification->pendidikan }}</td>
    </tr>
    <tr>
        <td>Status tempat tinggal saat ini :</td>
        <td>{{ $verification->status_tinggal }}</td>
    </tr>
    <tr>
        <td>Alamat tempat tinggal saat ini :</td>
        <td>{{ $verification->alamat }}</td>
    </tr>
    <tr>
        <td>Kota :</td>
        <td>{{ $verification->kota }}</td>
    </tr>
    <tr>
        <td>Telepon rumah :</td>
        <td>{{ $verification->telp_rumah }}</td>
    </tr>
    <tr>
        <td>No. Ponsel :</td>
        <td>{{ $verification->telp_hp }}</td>
    </tr>
    <tr>
        <td>Alamat e-mail :</td>
        <td>{{ $verification->email }}</td>
    </tr>
    <tr>
        <td>Nama gadis ibu kandung :</td>
        <td>{{ $verification->ibu }}</td>
    </tr>
    <tr>
        <td>NPWP :</td>
        <td>{{ $verification->npwp }}</td>
    </tr>
    <tr>
        <td>Kartu dikirim ke :</td>
        <td>{{ $verification->dikirim_dari }}</td>
    </tr>
    <tr>
        <td>Tagihan dikirim ke :</td>
        <td>{{ $verification->tagihan_ke }}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Data Pekerjaan dan Penghasilan</td>
    </tr>
    <tr>
        <td>Pekerjaan :</td>
        <td>{{ $verification->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Nama perusahaan :</td>
        <td>{{ $verification->nama_perusahaan }}</td>
    </tr>
    <tr>
        <td>Bidang usaha :</td>
        <td>{{ $verification->bidang }}</td>
    </tr>
    <tr>
        <td>Alamat kantor :</td>
        <td>{{ $verification->alamat_kantor }}</td>
    </tr>
    <tr>
        <td>Kota :</td>
        <td>{{ $verification->kota_kantor }}</td>
    </tr>
    <tr>
        <td>Kode Pos :</td>
        <td>{{ $verification->kode_pos_kantor }}</td>
    </tr>
    <tr>
        <td>Telepon Kantor :</td>
        <td>{{ $verification->telp_kantor }}</td>
    </tr>
    <tr>
        <td>Extension :</td>
        <td>{{ $verification->extension }}</td>
    </tr>
    <tr>
        <td>Jabatan :</td>
        <td>{{ $verification->jabatan }}</td>
    </tr>
    <tr>
        <td>Bagian :</td>
        <td>{{ $verification->bagian }}</td>
    </tr>
    <tr>
        <td>Usaha/bekerja sejak :</td>
        <td>{{ $verification->bekerja_sejak }}</td>
    </tr>
    <tr>
        <td>Penghasilan per bulan :</td>
        <td>{{ $verification->penghasilan }}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Keluarga Dekat Tidak Serumah yang Dapat Dihubungi Dalam Keadaan Darurat</td>
    </tr>
    <tr>
        <td>Nama :</td>
        <td>{{ $verification->nama_keluarga }}</td>
    </tr>
    <tr>
        <td>Hubungan :</td>
        <td>{{ $verification->hubungan }}</td>
    </tr>
    <tr>
        <td>Alamat tempat tinggal saat ini :</td>
        <td>{{ $verification->alamat_keluarga }}</td>
    </tr>
    <tr>
        <td>Kota :</td>
        <td>{{ $verification->kota_keluarga }}</td>
    </tr>
    <tr>
        <td>Kode Pos :</td>
        <td>{{ $verification->kode_pos_keluarga }}</td>
    </tr>
    <tr>
        <td>Telepon rumah :</td>
        <td>{{ $verification->telp_rumah_keluarga }}</td>
    </tr>
    <tr>
        <td>No. Ponsel :</td>
        <td>{{ $verification->telp_hp_keluarga }}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Data Pengajuan Loan (hanya untuk WNI)</td>
    </tr>
    <tr>
        <td>Jumlah pinjaman yang diajukan :</td>
        <td>{{ $verification->jml_pinjaman }}</td>
    </tr>
    <tr>
        <td>Jangka waktu pinjaman (bulan) :</td>
        <td>{{ $verification->jangka }}</td>
    </tr>
    <tr>
        <td>Peruntukan Penggunaan :</td>
        <td>{{ $verification->peruntukan }}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Dana pencairan pinjaman Loan agar dicairkan/ditransfer ke rekening saya, dengan informasi sebagai berikut :</td>
    </tr>
    <tr>
        <td>Bank :</td>
        <td>{{ $verification->bank_loan }}</td>
    </tr>
    <tr>
        <td>Atas Nama :</td>
        <td>{{ $verification->atas_nama }}</td>
    </tr>
    <tr>
        <td>Nomor Rekening :</td>
        <td>{{ $verification->norek_loan }}</td>
    </tr>
    <tr>
        <td>Cabang :</td>
        <td>{{ $verification->cabang_loan }}</td>
    </tr>
    </tbody>
</table>