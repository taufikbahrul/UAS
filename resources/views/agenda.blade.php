@extends('layouts.base')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>TUGAS 11</title>
</head>
<body>
    @include('includes.header')
    <div class="row justify-content-md-center">
        <h1 class="text-white">Candi</h1>
    </div>
    <div class="container">
        <div class="row">
            <h3 class="ml-3"><b>Candi</b></h3>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                <img src="asset/15.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Borobudur</h3>
                    <h5 class=" text-left font-italic text-muted">-Spiritual Borobudur</h5>
                    <p class="card-text">Dinasti Sailendra membangun peninggalan Budha terbesar di dunia antara 780-840 Masehi. Dinasti Sailendra merupakan dinasti yang berkuasa pada masa itu. Peninggalan ini dibangun sebagai tempat pemujaan Budha dan […]</p>
                    <button type="button" class="btn btn-warning float-left">Pelajari Lebih Lanjut</button>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/16.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Prambanan</h5>
                    <h5 class=" text-left font-italic text-muted">-Social Prambanan</h5>
                    <p class="card-text">Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Sampai saat ini belum dapat dipastikan kapan candi ini dibangun dan atas perintah siapa, namun kuat dugaan bahwa Candi […]</p>
                    <button type="button" class="btn btn-warning float-left">Pelajari Lebih Lanjut</button>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/10.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Ratu Boko</h5>
                    <h5 class=" text-left font-italic text-muted">-Natural Ratu Boko</h5>
                    <p class="card-text">Ratu Boko terletak sekitar 3 km ke arah selatan dari Candi Prambanan. Kawasan Ratu Boko yang berlokasi di atas sebuah bukit dengan ketinggian ± 195.97 m diatas permukaan laut. […]</p>
                    <button type="button" class="btn btn-warning float-left">Pelajari Lebih Lanjut</button>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/16.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Prambanan</h5>
                    <h5 class=" text-left font-italic text-muted">-Social Prambanan</h5>
                    <p class="card-text">Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Sampai saat ini belum dapat dipastikan kapan candi ini dibangun dan atas perintah siapa, namun kuat dugaan bahwa Candi […]</p>
                    <button type="button" class="btn btn-warning float-left">Pelajari Lebih Lanjut</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <h3 class="text-white">Candi</h3>
    </div>
    @include('includes.footer')
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