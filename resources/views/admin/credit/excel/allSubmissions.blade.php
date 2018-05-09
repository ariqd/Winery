<table>
    <thead>
    <tr>
        <th>Nama</th>
        <th>Nama Kartu</th>
        <th>Tanggal Pengajuan</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Kota</th>
        <th>Umur</th>
        <th>Pekerjaan</th>
        <th>Penghasilan</th>
        <th>Kartu Kredit yang Pernah Dimiliki</th>
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
