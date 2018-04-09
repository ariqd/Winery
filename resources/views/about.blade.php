@extends("layouts.main")

@section("title")
    Tentang Kami - Winery
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6 class="text-secondary my-5"><b>About Winery</b></h6>
                <h2 style="color:#4B2C76">Kami berfungsi sebagai jembatan yang mempertemukan calon nasabah dengan produk perbankan yang sesuai dengan kebutuhan serta kemampuan nasabah tersebut. </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('img/travels.png') }}" alt="travel-winery" class="about-img mt-3 img-fluid">
                <img src="{{ asset('img/colors.png') }}" alt="winery-accent" height="25" class="img-fluid">
                <p class="pt-5 px-5">
                    Resmi berdiri pada tahun 2016, Winery merupakan jasa penyedia produk perbankan. Winery secara langsung berperan sebagai perpanjangan tangan dari institusi keuangan dengan para calon nasabah. 
                    <br><br>
                    Selama hampir dua tahun ini Winery bekerja “dibalik layar”, dengan segala perkembangan teknologi yang terjadi saat ini, kami memilih untuk tetap perpegang pada cara lama yaitu direct-marketing, tepatnya komunikasi tatap muka dalam mengenal nasabah kami. Sebab, Winery percaya keputusan finansial setiap nasabah merupakan suatu hal krusial yang membutuhkan tak hanya keputusan tepat namun juga kepercayaan. Hal ini dilakukan agar para nasabah merasa aman dan nyaman dengan kami dan juga keputusan finansial yang akan mereka ambil.
                    <br><br>
                    Kini, waktunya Winery untuk muncul ke permukaan. Hadir dalam fitur digital, Winery ingin lebih dalam memberikan kenyamanan bagi para nasabah dengan mempermudah akses kegiatan perbankan dan mengambil keputusan finansial. Meski memiliki fitur digital terbaru, semua kegiatan dilakukan tanpa meninggalkan prinsip-prinsip yang selama hampir dua tahun ini berhasil membawa reputasi baik terhadap Winery. Reputasi tersebut dapat dilihat dari jumlah institusi keuangan yang kini bergabung menjadi partner setia kami.

                </p>
                <p class="text-secondary pt-5"><small>Visi dan Misi Winery</small></p>
                <h3 style="color:#05BCDC">Membuat masyarakat tak lagi takut dalam mengambil keputusan finansial terutama yang terkait dengan kredit, dengan tak henti-hentinya memberikan pelayanan terbaik yang jujur dan transparan.</h3>
            </div>
        </div>
    </div>
@endsection