@extends("layouts.main")

@section("title")
    Home - Winery
@endsection

@section("content")
    <div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md">
            <img src="{{ asset('img/home-slider.png') }}" alt="home-winery" class="home-image img-fluid">
        </div>
        <div class="col-md">
            <div class="home-text text-right mr-5">
                <small class="text-muted">FEATURED ARTICLE</small>
                <h1 style="color:#4B2C76">Credit Application With<br>No Worry!!</h1>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md">
            <div class="media home-desc">
                <img class="mr-3 mt-2" src="{{ asset('img/credit.png') }}" alt="winery-credit" width="70">
                <div class="media-body">
                    <h6 class="mt-0">Kartu Kredit</h6>
                    Temukan dan bandingkan berbagai macam layanan kartu kredit beserta dengan bonusnya yang sesuai dengan kebutuhan anda
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="media home-desc">
                <img class="mr-3" src="{{ asset('img/kta.png') }}" alt="winery-kta" width="70">
                <div class="media-body">
                    <h6 class="mt-0">Kredit Tanpa Agunan (KTA)</h6>
                    Hanya di sini anda bisa mengajukan KTA yang tepat untuk anda dan membandingkan berbagai produk KTA dengan suku bunga terbaik di Indoensia.
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="media home-desc">
                <img class="mr-3 mt-2" src="{{ asset('img/lease.png') }}" alt="winery-lease" width="70">
                <div class="media-body">
                    <h6 class="mt-0">Lease Back</h6>
                    Ajukan kredit dengan instan sesuai dengan kebutuhan anda dengan jaminan mudah, bunga rendah dan cicilan ringan.
                </div>
            </div>
        </div>
    </div>

    <div class="row home-slider mt-3">
        <div class="col-md">
            <div class="home-text-slider text-center">
                <div>
                    <h3>
                        Jangan khawatir! Kami akan membantu anda dalam memilih layanan finansial yang tepat untuk kebutuhan anda tanpa dikenakan biaya apa pun.
                    </h3>
                </div>
                <div>
                    <h3>
                        Di sini anda dapat membandingkan berbagai fasilitas kartu kredit termasuk diskon dan bonus-bonus dari berbagai bank yang ada di Indonesia.
                    </h3>
                </div>
                <div>
                    <h3>
                        Jangan takut untuk ajukan aplikasi anda. Kami akan membantu anda untuk memahami produk-produk finansial dan membantu proses aplikasi anda.
                    </h3>
                </div>
                <div>
                    <h3>
                        Kini aplikasi kartu kredit tidak perlu repot!
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="accent-2">
                <img src="{{ asset("img/colors.png") }}" alt="winery-accent" height="25">
            </div>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-12">
            <div class="text-center">
                <h1 style="color:#EF4351;margin-top:80px;">Please Choose the Transaction Activity <br> That Suits You</h1>
                <p class="text-secondary mt-4"><small>Setiap produk kami memiliki keunggulan yang berbeda, temukan dan telusuri masing-masing kelebihan sekarang,<br>dan daftarkan diri anda sekarang.</small></p>
            </div>
        </div>
    </div>

    <div class="row home-choose text-center">
        <div class="col-md-4">
            <a href="card.php?id=1" class="home-choose-link">
                <img src="{{ asset("img/travel.png") }}" alt="winery-travel" width="150">
                <div class="home-choose-text pt-3">
                    <h4>Let's Travel</h4>
                    <p>Mari jelajahi indahnya dunia</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="card.php?id=2" class="home-choose-link">
                <img src="{{ asset("img/homeliving.png") }}" alt="winery-travel" width="150">
                <div class="home-choose-text pt-3">
                    <h4>Home Living</h4>
                    <p>Indahkan rumahmu.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="card.php?id=3" class="home-choose-link">
                <img src="{{ asset("img/gadget.png") }}" alt="winery-travel" width="130">
                <div class="home-choose-text pt-3">
                    <h4>Gadget</h4>
                    <p>Nikmati indahnya teknologi.</p>
                </div>
            </a>
        </div>
        <div class="w-100 py-3"></div>
        <div class="col-md-4">
            <a href="card.php?id=4" class="home-choose-link" class="home-choose-link">
                <img src="{{ asset('img/foodie.png') }}" alt="winery-foodie" width="140">
                <div class="home-choose-text pt-3">
                    <h4>Truly Foodie</h4>
                    <p>Pecinta kuliner sejati.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="card.php?id=5" class="home-choose-link">
                <img src="{{ asset('img/shopping.png') }}" alt="winery-shopping" width="161">
                <div class="home-choose-text pt-4">
                    <h4>Shopping Queen</h4>
                    <p>Jadilah ratu belanja.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="card.php?id=6" class="home-choose-link">
                <img src="{{ asset('img/entertainment.png') }}" alt="winery-entertainment" width="130">
                <div class="home-choose-text pt-3">
                    <h4>Entertainment Are</h4>
                    <p>Mari menikmati indahnya hidup.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row home-explore">
        <div class="col-12">
            <img src="{{ asset('img/colors.png') }}" alt="winery-accent" height="20" class="mx-auto d-block">
            <h1 class="text-center mt-4">Find and Explore Our Best Offer<br>That is Perfect For You</h1>
            <p class="text-secondary text-center"><small>Nikmati berbagai promo menarik dari beragam merchant kesayangan anda.</small></p>
        </div>
    </div>

    <div class="row home-icons my-5">
        <div class="col-12">
            <div class="d-md-flex justify-content-md-center">
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-fashion.png') }}" alt="winery-explore-fashion" width="110">
                    <p>Fashion &<br>Lifestyle</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-travels.png') }}" alt="winery-explore-travels" width="110">
                    <p>Travel &<br>Leisure</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-win.png') }}" alt="winery-explore-win" width="110">
                    <p>Win Mobile</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-online-promo.png') }}" alt="winery-explore-online-promo" width="110">
                    <p>Online Promo</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-bali.png') }}" alt="winery-explore-bali" width="110">
                    <p>Beautiful Bali</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-food.png') }}" alt="winery-explore-food" width="110">
                    <p>Food &<br>Beverages</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-gadgets.png') }}" alt="winery-explore-gadgets" width="110">
                    <p>Gadget &<br> Electronics</p>
                </div>
                <div class="home-icons-snippet">
                    <img src="{{ asset('img/explore-other.png') }}" alt="winery-explore-other" width="110">
                    <p>Other</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="home-video-container w-100">
        <img src="{{ asset('img/home-video.png') }}" alt="" class="img-fluid home-video w-100">
        <div class="home-video-text">
            <a href="#"><img src="{{ asset('img/play.png') }}" alt="winery-video-play"></a>
            <h2 class="mt-4 amaranth">Memberikan perbandingan serta konsultasi baik secara langsung maupun online, dimana saja kapan saja</h2>
            <p><small>Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</small></p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md">
                <img src="{{ asset('img/pc.png') }}" alt="home-winery" class="home-image img-fluid">
            </div>
            <div class="col-md">
                <div class="pr-4" style="padding:100px 0">
                    <h5 class="text-muted">Kami Adalah Yang Terbaik! </h5>
                    <h2>Berbeda dengan situs pembanding lainnya, kami yang bekerja langsug dengan institusi keuangan sebab kami adalah agen tersebut.</h2>
                    <small class="text-muted">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan.</small>
                </div>
            </div>
        </div>

        <div class="row home-update p-0 p-lg-5">
            <div class="col-12">
                <div class="home-text-update text-center amaranth pr-sm-3">
                    <p>Kami adalah yang terbaik!</p>
                    <h2 style="color:#05BCDC">Dapatkan Update Berita Finansial Terkini.</h2>
                    <small>Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</small>
                </div>
            </div>
            <div class="col-12">
                <div class="home-updates mt-5 mx-auto d-block">
                    <div>
                        <div class="home-updates-article pr-3 ml-lg-3">
                            <p>Seputar Finansial</p>
                            <img src="{{ asset('img/update-1.png') }}" alt="winery-article" class="img-fluid" width="350">
                            <h3 class="py-4">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</h3>
                            <a href="#">Read More...</a>
                        </div>
                    </div>
                    <div>
                        <div class="home-updates-article pr-3 ml-lg-3">
                            <p>Kredit Updates</p>
                            <img src="{{ asset('img/update-2.png') }}" alt="winery-article" class="img-fluid" width="350">
                            <h3 class="py-4">Baca berita terbaru serta artikel tips dan strategi keuangan yang membuat Anda lebih cerdas finansial.</h3>
                            <a href="#">Read More...</a>
                        </div>
                    </div>
                    <div>
                        <div class="home-updates-article pr-3 ml-lg-3">
                            <p>Sudut Keuangan</p>
                            <img src="{{ asset('img/update-3.png') }}" alt="winery-article" class="img-fluid" width="350">
                            <h3 class="py-4">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</h3>
                            <a href="#">Read More...</a>
                        </div>
                    </div>
                    <div>
                        <div class="home-updates-article pr-3 ml-lg-3">
                            <p>Seputar Finansial</p>
                            <img src="{{ asset('img/update-1.png') }}" alt="winery-article" class="img-fluid" width="350">
                            <h3 class="py-4">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</h3>
                            <a href="#">Read More...</a>
                        </div>
                    </div>
                    <div>
                        <div class="home-updates-article pr-3 ml-lg-3">
                            <p>Seputar Finansial</p>
                            <img src="{{ asset('img/update-1.png') }}" alt="winery-article" class="img-fluid" width="350">
                            <h3 class="py-4">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</h3>
                            <a href="#">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row home-companies">
            <div class="col-12">
                <div class="text-center">
                    <h5 class="text-secondary">Kami adalah yang terbaik!</h5>
                    <h1 class="mb-3">Kami adalah perusahaan terpercaya<br>dan bekerja sama dengan<br>instansi keuangan yang bervariasi.</h1>
                    <small class="text-muted">Sebagai toko finansial terpercaya, kami telah melayani lebih dari 20 juta pelanggan</small>
                </div>
            </div>
            <div class="col-12">
                <div class="home-company-slick pt-5 mx-auto d-block">
                    <div>
                        <img src="{{ asset('img/logo-bank-bri.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('img/logo-bank-permata-bank.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('img/logo-bank-danamon.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('img/logo-bank-maybank.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('img/logo-bank-bri.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('img/logo-bank-permata-bank.png') }}" alt="winery-bank" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 home-signup">
            <div class="col-md-6 offset-md-3">
                <h2>Mau lebih cerdas finansial?</h2>
                <p>Get more finance tips and exclusive offers sent straight to your inbox</p>
                <div class="input-group my-4">
                    <input type="text" class="form-control" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-winery" type="button">SIGN UP</button>
                    </div>
                </div>
                <p>Tick to opt-in. Opt-out at any time via the "unsubscribe" link in the footer of emails. <a href="#">View our privacy policy</a></p>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="status">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-winery">
                        <h5 class="modal-title">Pengajuan Kredit Berhasil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda akan dihubungi oleh pihak Winery selambat-lambatnya 3x24 jam</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-winery-3" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section("css")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
@endsection

@section("js")
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.home-text-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000
            });
            $('.home-updates').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow:"<img class='a-left control-c prev slick-prev img-fluid' src='{{ asset('img/arrow-left.png') }}'>",
                nextArrow:"<img class='a-right control-c next slick-next img-fluid' src='{{ asset('img/arrow-right.png') }}'>",
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 600,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 480,
                        settings: "unslick"
                    }
                ]
            });
            $('.home-company-slick').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow:"<img class='a-left control-c prev slick-prev img-fluid' src='{{ asset('img/arrow-left.png') }}'>",
                nextArrow:"<img class='a-right control-c next slick-next img-fluid' src='{{ asset('img/arrow-right.png') }}'>"
            });
        });
    </script>

    @if (session('status'))
        <script type="text/javascript">
            $(document).ready(function(){
                $('#status').modal('show');
            });
        </script>
    @endif
@endsection
