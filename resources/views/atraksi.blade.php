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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8 mt-3">
                <h3 class="ml-3"><b>Atraksi</b></h3>
            </div>
            <div class="col-8 mt-3">
                <div class="media">
                    <div class="card-body">
                        <h4 class=" text-left ">Junior Archaeologist: The Last Temple of Roro Jonggrang</h4>
                        <h5 class=" text-left font-italic text-muted">Desember 07, 2020 </h5>
                        <p class="card-text text-justify">  Kisah tentang Ramayana ataupun Roro Jonggrang pasti sudah tidak asing lagi di telinga kita. Namun, tahukah kalian tentang cerita relief yang ada di Candi Prambanan, Sewu, Bubrah dan […]</p>
                    </div>
                    <img src="asset/atraksi4.jpg" class="align-self-center mr-3" alt="...">
                </div>
            </div>
            <div class="col-8 mt-3">
                <div class="media">
                    <div class="card-body">
                        <h4 class=" text-left ">Boko Romantic Package</h4>
                        <h5 class=" text-left font-italic text-muted">Oktober 16, 2020  </h5>
                        <p class="card-text text-justify">   Ratu Boko Romantic Dinner Package Bagi kalian yang merindukan waktu berdua dengan orang terkasih, di luar ruangan namun tetap aman, Ratu Boko Romantic Dinner solusinya. Kalian bisa menikmati […]</p>
                    </div>
                    <img src="asset/atraksi4.jpg" class="align-self-center mr-3" alt="...">
                </div>
            </div>
            <div class="col-8 mt-3">
                <div class="media">
                    <div class="card-body">
                        <h4 class=" text-left ">Dagi Abhinaya Picnic Breakfast</h4>
                        <h5 class=" text-left font-italic text-muted">Oktober 15, 2020  </h5>
                        <p class="card-text text-justify">   Dagi Abhinaya Picnic Breakfast by Manohara Borobudur Feel the new experience of adoring Borobudur Temple from Dagi Hill while enjoying breakfast that pampering your taste buds Coba bayangkan: […]</p>
                    </div>
                    <img src="asset/atraksi4.jpg" class="align-self-center mr-3" alt="...">
                </div>
            </div>
            <div class="col-8 mt-3">
                <div class="media">
                    <div class="card-body">
                        <h4 class=" text-left ">Boko Piknik Package</h4>
                        <h5 class=" text-left font-italic text-muted">Oktober 15, 2020   </h5>
                        <p class="card-text text-justify">    Paket terbaru dari @ratubokopark, Boko Picnic History Junkies, bosen sama piknik yang itu itu aja? Atau pingin menikmati waktu berharga bersama orang tercinta di Keraton Ratu Boko, bercerita bersama […]</p>
                    </div>
                    <img src="asset/atraksi4.jpg" class="align-self-center mr-3" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <h1 class="text-white">Candi</h1>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link text-dark border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark border-0" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark border-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link text-dark border-0" href="#">...</a></li>
            <li class="page-item"><a class="page-link text-dark border-0" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link text-dark border-0" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <div class="row justify-content-md-center">
        <h1 class="text-white">Candi</h1>
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