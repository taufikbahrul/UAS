<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>TUGAS 11</title>
</head>

<body>
    <header class="jumbotron pt-0 pb-1" style="background: url(asset/imag.jpg); background-size: cover;">
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container border-bottom border-light">
                <a class="navbar-brand" href="#">
                    <img src="asset/logo.png" width="130" height="72" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler text-white bg-white" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white bg-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="candi">CANDI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="atraksi">ATRAKSI</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VENUE
                            </a>
                            <div class="dropdown-menu bg-transparent" style="border: none;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="venue">BOROBUDUR</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="#">PRAMBANAN</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="#">RAMAYANA</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="#">RATU BOKO</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="agenda">AGENDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">ARTIKEL</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                INDONESIA
                            </a>
                            <div class="dropdown-menu bg-transparent" style="border: none;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="#">INDONESIA</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="#">ENGLISH</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container bawah">
            <p class="lead text-white">CANDI BOROBUDUR</p>
        <h1 class="text-white">Inspiring Heritage of Indonesia</h1>
        <hr class="my-4" style="border: 1px solid #fff;">
    </div>
    </header>
    <div class="container">
        <h3 class="text-left"><b>Pesan Tiket</b></h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Pilih Candi
                        <div class="form-group">
                            <select id="inputState" class="form-control">
                                <option selected>Borobudur</option>
                                <option>Prambanan</option>
                                <option>Ratu Bokok</option>
                            </select>
                        </div>
                    </th>
                    <th scope="col">Tipe Wisatawan
                        <div class="form-group">
                            <select id="inputState" class="form-control">
                                <option selected>Lokal</option>
                                <option>Asing</option>
                            </select>
                        </div>
                    </th>
                    <th scope="col">
                        <button type="submit" class="btn btn-warning float-left">Beli</button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="pertama" class="container">
        <h3 class="text-left border-bottom border-warning"><b>Candi</b></h3>
        <div class="row">
            <div class="img-hover col-sm">
                <img src="asset/borobudur.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten">
                    <h1>Borobudur</h1>
                    <p>Spiritual Borobudur</p>
                </div>
            </div>
            <div class="col-sm">
                <img src="asset/prambanan.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten">
                    <h1>Borobudur</h1>
                    <p>Spiritual Borobudur</p>
                </div>
            </div>
            <div class="col-sm">
                <img src="asset/ratuboko.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten">
                    <h1>Borobudur</h1>
                    <p>Spiritual Borobudur</p>
                </div>
            </div>
        </div>
    </div>
    <div id="kedua" class="container">
        <h3 class="2 text-left border-bottom border-warning"><b>Atraksi</b></h3>
        <div class="row">
            @foreach ($atraksi as $item)
            <div class="img-hover2 col-sm">
                <img src="{{Storage::url($item->image)}}" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten2">
                    <h1 class="h1">{{$item->text}}</h1>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <section id="ketiga">
        <div class="row5">
            <div class="agenda">
                <h5 class="title"><b>Agenda</b></h5>
            </div>
            <div class="agenda2">
                <a class="btn" href="https://borobudurpark.com/event-tahun-ini">
                    Agenda Tahunan
                </a>
                <a class="btn" href="https://borobudurpark.com/event/">
                    Lihat Semua Agenda
                </a>
            </div>
        </div>
    </section>
    <div id="keempat" class="container">
        <h3 class="text-left border-bottom border-warning"><b>Video</b></h3>
        <div class="row">
            <div class="img-hover4 col-sm">
                <img src="asset/9.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten4">
                    <h1> World Leader Visited Borobudur </h1>
                </div>
            </div>
            <div class="img-hover4 col-sm">
                <img src="asset/10.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten4">
                    <h1> Tawur Agung Prambanan </h1>
                </div>
            </div>
            <div class="img-hover4 col-sm">
                <img src="asset/11.jpg" alt="Responsive image" class="img-thumbnail">
                <div class="hover-konten4">
                    <h1> Borobudur Treasure Hunt </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-3 border-top border-warning">
            <div class="col col-12 col-md-6">
                <h3><b>Artikel & Berita</b></h3>
            </div>
            <div class="col col-12 col-md-6">
                <div class="media mt-3">
                    <div class="media-body">
                        <h3 class=" text-left">PT TWC dan BKB Menetapkan Kesepakatan Baru Penggunaan Guide di
                            Candi Borobudur</h3>
                        <p> PT TWC DAN BKB MENETAPKAN KESEPAKATAN BARU PENGGUNAAN GUIDE DI CANDI BOROBUDUR (Press
                            Release)...</p>
                         <button type="button" class="btn btn-warning float-right">Selengkapnya</button>
                    </div>
                </div>
                <div class="media mt-3">
                    <img src="asset/berita.jpg" class="align-self-center mr-3" alt="Responsive image">
                    <div class="media-body">
                        <h3 class=" text-left">Opening Promo: The Manohara Hotel Yogyakarta</h3>
                        <p>  Book directly on The Manohara Hotel Yogyakarta’ website with promo code OPENING20 and you...</p>
                        <button type="button" class="btn btn-warning float-right">Selengkapnya</button>
                    </div>
                </div>
                <div class="media mt-3">
                    <img src="asset/berita2.jpg" class="align-self-center mr-3" alt="Responsive image">
                    <div class="media-body">
                        <h3 class=" text-left">Promo: Senin Happy at Prambanan Park</h3>
                        <p>   History Junkies, Senin Happy hadir untuk menemani kunjunganmu di Taman Wisata Candi Prambanan. Kini,...</p>
                        <button type="button" class="btn btn-warning float-right">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section id="ketujuh">
        <div class="gambar7">
            <image class="" src="./asset/8.jpg" >
            <image class="" src="./asset/9.jpg" >
            <image class="" src="./asset/10.jpg" >
            <image class="" src="./asset/11.jpg" >
            <image class="" src="./asset/12.jpg" >
            <image class="" src="./asset/13.jpg" >
            <image class="" src="./asset/14.jpg" >
            <image class="" src="./asset/15.jpg" >
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="asset/logobawah.png" alt="Responsive image" class="img-thumbnail">
            </div>
            <div class="col">
                <ul class="ul2 navbar-nav float-right mt-3 d-flex flex-row">
                    <li class="nav-item">
                        <img src="asset/twitter.png" alt="Responsive image" class="img-thumbnail">
                    </li>
                    <li class="nav-item">
                        <img src="asset/facebook.png" alt="Responsive image" class="img-thumbnail">
                    </li>
                    <li class="nav-item">
                        <img src="asset/instagram.png" alt="Responsive image" class="img-thumbnail">
                    </li>
                    <li class="nav-item">
                        <img src="asset/youtube.png" alt="Responsive image" class="img-thumbnail">
                    </li>
                    </ul>
            </div>
        </div>
        <div id="footer" class="row mt-3">
            <div class="col col-12 col-md-4">
                <ul class="list-unstyled mr-3 mt-3">
                    <li>Call Center (Office Hours): +62811 2688 000</li>
                    <li>Email: marketing@borobudurpark.co.id</li>
                    <li>Email: info@borobudurpark.co.id</li>
                </ul>
            </div>
            <div class="col col-12 col-md-2">
                <h4>Candi</h4>
                <ul class="list-unstyled">
                    <li>Borobudur</li>
                    <li>Prambanan</li>
                    <li>Ratu Boko</li>
            </div>
            <div class="col col-12 col-md-3">
                <h4>Informasi</h4>
                <ul class="list-unstyled">
                    <li>Lembar Fakta</li>
                    <li>Brosur</li>
                    <li>Beli Tiket</li>
            </div>
            <div class="col col-12 col-md-3">
                <h4>Taman Wisata Candi</h4>
                <ul class="list-unstyled">
                    <li>Website Perusahaan</li>
                    <li>Kontak</li>
                    <li>Tentang Kami</li>
            </div>
        </div>
        <Div class="mt-3">
            <p class="footer text-center">© Copyright PT Taman Wisata Candi Borobudur, Prambanan dan Ratu Boko (Persero) 2020. All Rights Reserved.</p>
        </Div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>
