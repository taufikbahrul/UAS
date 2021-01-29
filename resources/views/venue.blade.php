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
                <p class="ml-3 text-warning">Back to Venues</p>
            </div>
            <div class="col-8 mt-3">
                <div class="media">
                    <div class="card-body">
                        <h1 class=" text-left ">Borobudur Venue</h1>
                        <h1 class=" text-left text-warning">... </h1>
                        <p class="card-text text-justify">  Candi Borobudur adalah mahakarya arsitektur yang dibangun oleh Dinasti Syailendra di atas bukit. Pemandangan dari atas Candi Borobudur adalah salah satu pemandangan terbaik yang bisa Anda dapatkan di Indonesia. Dari tempat-tempat terbuka di Taman Wisata Candi Borobudur, kita dapat melihat tingkat atas dari struktur yang luar biasa ini. Pemandangan Candi Borobudur benar-benar akan menjadi nilai tambah bagi setiap acara yang diadakan di Taman Wisata Candi Borobudur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <h1 class="text-white">Candi</h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bukit Dagi Borobudur</h5>
                    <p class="card-text">Perfect Spot to Enjoy Cultural Heritage Tempat terbaik di Borobudur untuk menikmati suasana alam yang indah dan Candi Borobudur. Terletak di ketinggian 275 meter, Bukit Dagi memberikan suasana […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Karmawibhangga</h5>
                    <p class="card-text">The Strategic Place for Event Karmawibhangga merupakan salah satu relief yang terdapat dalam Candi Borobudur dan mengadung nilai mengenai sebab-akibat. Letaknya tepat di seberang Museum Karmawibhangga di sebelah […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Taman Padma Borobudur</h5>
                    <p class="card-text">The Cultural Venue Berada di sebelah timur laut Candi Borobudur, Taman Padma memberikan pengalaman event yang berbeda dengan yang lainnya. Dengan suasana yang asri dan sejuk, Taman Padma […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Taman Lumbini Borobudur</h5>
                    <p class="card-text">Garden Venue for Amazing Moment Ciptakan pengalaman event yang spektakuler dengan memandang Candi Borobudur dari dekat. Dikelilingi dengan pepohonan di sekitar Taman Lumbini semakin memberikan kesan rindang dan […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lapangan Merah</h5>
                    <p class="card-text">Versatile Park for Happiness Lapangan Merah merupakan salah satu area andalan Borobudur Park yang diberikan untuk mengadakan kegiatan outdoor seperti camping atau gathering. Area yang luas dan dikelilingi […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Samudraraksa Borobudur</h5>
                    <p class="card-text"> Exciting and Fun Activities Space Lahan yang luas dengan dikelilingi pepohonan yang rindang memberikan kesan yang nyaman untuk melakukan aktivitas outdoor. Menjadi pilihan yang tepat untuk melakukan kegiatan […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marga Utama Borobudur</h5>
                    <p class="card-text">The Best Location with Magnificent Experience Berada di jalur utama menuju Candi Borobudur, memberikan pengalaman yang megah karena dapat melihat Candi Borobudur secara proposional. Posisi candi Borobudur yang […]</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="asset/venue7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marga Utama Borobudur</h5>
                    <p class="card-text">The Best Location with Magnificent Experience Berada di jalur utama menuju Candi Borobudur, memberikan pengalaman yang megah karena dapat melihat Candi Borobudur secara proposional. Posisi candi Borobudur yang […]</p>
                </div>
                </div>
            </div>
        </div>
    </div>
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