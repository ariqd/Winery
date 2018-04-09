@extends("layouts.admin")

@section("title", "Setting")

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting Filter</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Bank</h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bank">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    @foreach($banks as $bank)
                        <tr>
                            <td>{{ $bank->nama }}</td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ url('admin/setting/bank/'.$bank->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$bank->nama}}"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$bank->nama}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteLabel">Hapus {{ $bank->nama }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus {{ $bank->nama }} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ url('admin/setting/bank/delete/'.$bank->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Kategori</h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#kategori">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->nama }}</td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ url('admin/setting/category/'.$category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$category->nama}}"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$category->nama}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteLabel">Hapus Kategori {{ $category->nama }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus kategori {{ $category->nama }} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ url('admin/setting/category/delete/'.$category->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Jenis Kartu</h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#jenis">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    @foreach($types as $jenis)
                        <tr>
                            <td>{{ $jenis->nama }}</td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ url('admin/setting/jenis/'.$jenis->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$jenis->nama}}"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$jenis->nama}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteLabel">Hapus Jenis Kartu {{ $jenis->nama }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus jenis kartu {{ $jenis->nama }} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ url('admin/setting/jenis/delete/'.$jenis->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Penghasilan</h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#holder">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    @foreach($holders as $holder)
                        <tr>
                            <td>{{ $holder->nama }}</td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ url('admin/setting/holder/'.$holder->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$holder->nama}}"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$holder->nama}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteLabel">Hapus Kategori Penghasilan {{ $holder->nama }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus kategori pemegang kartu {{ $holder->nama }} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ url('admin/setting/holder/delete/'.$holder->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Insert Bank Modal -->
    <div class="modal fade" id="bank" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankLabel">Tambah Bank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/setting/bank') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_bank">Nama Bank</label>
                            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_bank" placeholder="Nama Bank">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Logo Bank</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_bank">Deskripsi Bank</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi_bank" rows="3" placeholder="Deskripsi Bank"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Insert Jenis Kartu Modal -->
    <div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankLabel">Tambah Jenis Kartu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/setting/jenis') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_jenis">Nama Jenis Kartu</label>
                            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_jenis" placeholder="Nama Jenis Kartu">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Insert Penghasilan Modal -->
    <div class="modal fade" id="holder" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankLabel">Tambah Penghasilan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/setting/holder') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_holder">Penghasilan</label>
                            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_holder" placeholder="Penghasilan">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Insert Kategori Modal -->
    <div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/setting/category') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama_holder" placeholder="Nama Kategori">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_kategori">Deskripsi Kategori</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi_bank" rows="3" placeholder="Deskripsi Bank"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection