<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>POSYANDU</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('template') }}/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/css/one-page-parallax/style.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('template') }}/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>

<body data-spy="scroll" data-target="#header-navbar" data-offset="60">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!--Start of Tawk.to Script-->
    
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ asset('template') }}/img/posyandu/logoposyandu.png" />
                        <span class="brand-text">
                            {{-- <span class="text-theme">Posyandu</span> UMPP --}}
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        {{-- <li class="active dropdown">
                            <a href="#home" data-click="scroll-to-target" data-toggle="dropdown">HOME <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li><a href="index.html">Page with Transparent Header</a></li>
                                <li><a href="index_inverse_header.html">Page with Inverse Header</a></li>
                                <li><a href="index_default_header.html">Page with White Header</a></li>
                                <li><a href="extra_element.html">Extra Element</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="#home" data-click="scroll-to-target">Beranda</a></li>
                        {{-- <li><a href="#about" data-click="scroll-to-target">Tentang</a></li> --}}
                        {{-- <li><a href="#team" data-click="scroll-to-target">TEAM</a></li> --}}
                        <li><a href="#service" data-click="scroll-to-target">Layanan</a></li>
                        {{-- <li><a href="#work" data-click="scroll-to-target">Galeri</a></li> --}}
                        {{-- <li><a href="#client" data-click="scroll-to-target">CLIENT</a></li> --}}
                        {{-- <li><a href="#pricing" data-click="scroll-to-target">PRICING</a></li> --}}
                        <li><a
                                href="https://drive.google.com/file/d/1_tcCcLscH9-W4d-eSFijo-1HCV3BeoOP/view?usp=sharing">Buku
                                Panduan</a></li>
                        <li><a href="{{ route('login') }}">Masuk</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->

        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('template') }}/img/posyandu/landingnew.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Selamat Datang di Posyandu Lansia</h1>
                <h3>Posyandu Sahabat Masyarakat</h3>
                <p>
                    Tua Berguna dan Berkualitas
                </p>

            </div>
            <!-- end container -->
        </div>

        <!-- end #home -->

        <!-- begin #about -->
        {{-- <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About Us</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Our Story</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vestibulum posuere augue eget ante porttitor fringilla.
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna,
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam.
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec.
                            </p>
                            <p>
                                In non libero at orci rutrum viverra at ac felis.
                                Curabitur a efficitur libero, eu finibus quam.
                                Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo.
                                Donec gravida, eros ac pretium cursus, est erat dapibus quam,
                                sit amet dapibus nisl magna sit amet orci.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <h3>Our Story</h3>
                        <!-- begin about-author -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum posuere augue eget ante porttitor fringilla.
                            Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna,
                            non rutrum dolor risus non sapien. Vivamus vel tincidunt quam.
                            Donec ultrices nisl ipsum, sed elementum ex dictum nec.
                        </p>
                        <p>
                            In non libero at orci rutrum viverra at ac felis.
                            Curabitur a efficitur libero, eu finibus quam.
                            Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo.
                            Donec gravida, eros ac pretium cursus, est erat dapibus quam,
                            sit amet dapibus nisl magna sit amet orci.
                        </p>
                        <!-- end about-author -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-12">
                        <h3>Our Experience</h3>
                        <!-- begin skills -->
                        <div class="skills">
                            <div class="skills-name">Front End</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 95%">
                                    <span class="progress-number">95%</span>
                                </div>
                            </div>
                            <div class="skills-name">Programming</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 90%">
                                    <span class="progress-number">90%</span>
                                </div>
                            </div>
                            <div class="skills-name">Database Design</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 85%">
                                    <span class="progress-number">85%</span>
                                </div>
                            </div>
                            <div class="skills-name">Wordpress</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 80%">
                                    <span class="progress-number">80%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #about -->

        <!-- begin #milestone -->
        {{-- <div id="milestone" class="content bg-none has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('template') }}/img/bg/bg-milestone.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="1292">1,292</div>
                            <div class="title">Themes & Template</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="9039">9,039</div>
                            <div class="title">Registered Members</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="89291">89,291</div>
                            <div class="title">Items Sold</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="129">129</div>
                            <div class="title">Theme Authors</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #milestone -->

        {{-- <!-- begin #team -->
        <div id="team" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Team</h2>
                <p class="content-desc">
                    Phasellus suscipit nisi hendrerit metus pharetra dignissim. Nullam nunc ante, viverra quis<br /> 
                    ex non, porttitor iaculis nisi.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{asset('template')}}/img/user/user-1.jpg" alt="Ryan Teller" />
                            </div>
                            <div class="info">
                                <h3 class="name">Ryan Teller</h3>
                                <div class="title text-theme">FOUNDER</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{asset('template')}}/img/user/user-2.jpg" alt="Jonny Cash" />
                            </div>
                            <div class="info">
                                <h3 class="name">Johnny Cash</h3>
                                <div class="title text-theme">WEB DEVELOPER</div>
                                <p>Donec quam felis, ultricies nec, pellentesque eu sem. Nulla consequat massa quis enim.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{asset('template')}}/img/user/user-3.jpg" alt="Mia Donovan" />
                            </div>
                            <div class="info">
                                <h3 class="name">Mia Donovan</h3>
                                <div class="title text-theme">WEB DESIGNER</div>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. </p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #team --> --}}

        <!-- begin #quote -->
        {{-- <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('template') }}/img/bg/bg-quote.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Passion leads to design, design leads to performance, <br />
                        performance leads to <span class="text-theme">success</span>!
                        <i class="fa fa-quote-right"></i>
                        <small>Sean Themes, Developer Teams in Malaysia</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #quote -->

        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Layanan Posyandu</h2>
                <p class="content-desc">
                    Beberapa Layanan Posyandu yang disediakan
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Indeks Massa Tubuh</h4>
                                <p class="desc">Menilai status gizi pada seorang individu. Pengukuran dan penilaian
                                    menggunakan IMT berhubungan dengan kekerungan dan kelebihan status gizi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-paint-brush"></i></div>
                            <div class="info">
                                <h4 class="title">Rujukan</h4>
                                <p class="desc">Keterangan lanjutan tentang satu hal yang berdasarkan data yang ada
                                    di Laporan KMS.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Grafik KMS</h4>
                                <p class="desc">Hasil KMS ditampilkan dalam bentuk grafik agar mudah dipahami seperti
                                    KMS pada umumnya.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-code"></i></div>
                            <div class="info">
                                <h4 class="title">Jadwal Kegiatan</h4>
                                <p class="desc">Jadwal kegiatan yang akan dilakukan seperti senam, pertemuan wajib,
                                    ataupun lainya.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-shopping-cart"></i></div>
                            <div class="info">
                                <h4 class="title">Pencatatan Laporan</h4>
                                <p class="desc">Laporan dapat dilihat dengan mudah dan cepat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    {{-- <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Free Support</h4>
                                <p class="desc">Integer consectetur, massa id mattis tincidunt, sapien erat malesuada turpis, nec vehicula lacus felis nec libero. Fusce non lorem nisl.</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- beign #action-box -->
        {{-- <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('template') }}/img/bg/bg-action.jpg" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-9 col-sm-9">
                        <div class="icon-large text-theme">
                            <i class="fa fa-binoculars"></i>
                        </div>
                        <h3>Rujukan</h3>
                        <p>
                            Keterangan lanjutan tentang satu hal yang berdasarkan data yang ada di Laporan KMS.
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3">
                        <a href="#" class="btn btn-outline btn-block">Live Preview</a>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #action-box -->

        <!-- begin #work -->
        {{-- <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Galeri</h2>
                <p class="content-desc">
                    Beberapa Kegiatan yang dilakukan Posyandu.
                </p>
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-1.jpg"
                                        alt="Work 1" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam molestie</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-2.jpg"
                                        alt="Work 2" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Quisque at pulvinar lacus</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-3.jpg"
                                        alt="Work 3" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Vestibulum et erat ornare</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-4.jpg"
                                        alt="Work 4" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Sed vitae mollis magna</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-5.jpg"
                                        alt="Work 5" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Suspendisse at mattis odio</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-6.jpg"
                                        alt="Work 6" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam vitae commodo diam</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-7.jpg"
                                        alt="Work 7" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Phasellus eu vehicula lorem</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{ asset('template') }}/img/work/work-img-8.jpg"
                                        alt="Work 8" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Morbi bibendum pellentesque</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #work -->

        <!-- begin #client -->
        {{-- <div id="client" class="content has-bg bg-green" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{asset('template')}}/img/bg/bg-client.jpg" alt="Client" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInUp">
                <h2 class="content-title">Our Client Testimonials</h2>
                <!-- begin carousel -->
                <div class="carousel testimonials slide" data-ride="carousel" id="testimonials">
                    <!-- begin carousel-inner -->
                    <div class="carousel-inner text-center">
                        <!-- begin item -->
                        <div class="item active">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra, nulla ut interdum fringilla,<br />
                                urna massa cursus lectus, eget rutrum lectus neque non ex.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Mark Doe</span>, Designer</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Donec cursus ligula at ante vulputate laoreet. Nulla egestas sit amet lorem non bibendum.<br />
                                Nulla eget risus velit. Pellentesque tincidunt velit vitae tincidunt finibus.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Joe Smith</span>, Developer</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Sed tincidunt quis est sed ultrices. Sed feugiat auctor ipsum, sit amet accumsan elit vestibulum<br />
                                fringilla. In sollicitudin ac ligula eget vestibulum.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Linda Adams</span>, Programmer</div>
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end carousel-inner -->
                    <!-- begin carousel-indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="1" class=""></li>
                        <li data-target="#testimonials" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- end carousel-indicators -->
                </div>
                <!-- end carousel -->
            </div>
            <!-- end containter -->
        </div> --}}
        <!-- end #client -->

        <!-- begin #pricing -->
        {{-- <div id="pricing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Price</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin pricing-table -->
                <ul class="pricing-table col-4">
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Starter</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">FREE</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>1GB Storage</li>
                                <li>2 Clients</li>
                                <li>5 Active Projects</li>
                                <li>5 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Basic</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$9.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>2GB Storage</li>
                                <li>5 Clients</li>
                                <li>10 Active Projects</li>
                                <li>10 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li class="highlight" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Premium</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$19.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>5GB Storage</li>
                                <li>10 Clients</li>
                                <li>20 Active Projects</li>
                                <li>20 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-theme btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Lifetime</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$999</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Unlimited Storage</li>
                                <li>Unlimited Clients</li>
                                <li>Unlimited Projects</li>
                                <li>Unlimited Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #pricing -->

        <!-- begin #contact -->
        {{-- <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Contact Us</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <h3>If you have a project you would like to discuss, get in touch with us.</h3>
                        <p>
                            Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                            lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                        </p>
                        <p>
                            <strong>SeanTheme Studio, Inc</strong><br />
                            795 Folsom Ave, Suite 600<br />
                            San Francisco, CA 94107<br />
                            P: (123) 456-7890<br />
                        </p>
                        <p>
                            <span class="phone">+11 (0) 123 456 78</span><br />
                            <a href="mailto:hello@emailaddress.com">seanthemes@support.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Name <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Message <span
                                        class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9 text-left">
                                    <button type="submit" class="btn btn-theme btn-block">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div> --}}
        <!-- end #contact -->

        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div class="footer-brand-logo"></div>
                    Color Admin
                </div>
                <p>
                    &copy; Copyright Color Tim IT E-KMS 2024 <br />
                    An admin & front end theme with serious impact. Created by <a href="#">SeanTheme</a>
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div>
        <!-- end #footer -->

        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple"
                            data-theme-file="{{ asset('template') }}/css/one-page-parallax/theme/purple.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover"
                            data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue"
                            data-theme-file="{{ asset('template') }}/css/one-page-parallax/theme/blue.css"
                            data-theme-file="" data-click="theme-selector" data-toggle="tooltip"
                            data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-green"
                            data-theme-file="{{ asset('template') }}/css/one-page-parallax/theme/default.css"
                            data-theme-file="" data-theme="default" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange"
                            data-theme-file="{{ asset('template') }}/css/one-page-parallax/theme/orange.css"
                            data-theme-file="" data-click="theme-selector" data-toggle="tooltip"
                            data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red"
                            data-theme-file="{{ asset('template') }}/css/one-page-parallax/theme/red.css"
                            data-theme-file="" data-click="theme-selector" data-toggle="tooltip"
                            data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                </ul>
            </div>
        </div>
        <!-- end theme-panel -->
    </div>
    <!-- end #page-container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap3/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
  <script src="assets/crossbrowserjs/html5shiv.js"></script>
  <script src="assets/crossbrowserjs/respond.min.js"></script>
  <script src="assets/crossbrowserjs/excanvas.min.js"></script>
 <![endif]-->
    <script src="{{ asset('template') }}/plugins/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('template') }}/plugins/scrollMonitor/scrollMonitor.js"></script>
    <script src="{{ asset('template') }}/js/one-page-parallax/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        window.onload = function() {
            OpenBootstrapPopup();
        };

        function OpenBootstrapPopup() {
            $("#simpleModal").modal('show');
        }
    </script> --}}
</body>

</html>
