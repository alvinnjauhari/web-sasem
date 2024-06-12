<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SASEM: Ship Waste Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- HEADER start-->
    <header>
        <div class="header-nav">
            <a href="#Home">HOME</a>
            <a href="https://www.instagram.com/sasem.its/">CONTACT US</a>
        </div>
        <a href="/" class="header-logo">
            <img src="{{ asset('images/logo.png') }}" alt="" style="width: 381px; height: 116px"/>
        </a>
        <div class="header-button">
            <a href="{{ route('daftar-mitra') }}" class="button-1">DAFTAR MITRA</a>
            <a href="" class="button-2">DOWNLOAD</a>
        </div>
    </header>
    <!-- HEADER end-->

    <!-- CONTENT 1 start -->
    <div class="content-1">
        <div class="c1-wrapper">
            <h1>MENGAPA SASEM?</h1>
            <p>
                Aplikasi SASEM (Shipyard Waste Management) sebagai aplikasi pengelolaan limbah padat galangan kapal berdasarkan regulasi UU No.11 Tahun 2020, yang menyatakan bahwa pihak industri hingga pemerintah harus bertanggung jawab melindungi dan menjaga kualitas air.
                <br><br>
                Industri galangan kapal kerap menghasilkan limbah dari sisa industri dari aktivitas yang telah dilakukan, terutama limbah padat dan tempat galangan yang berdekatan dengan perairan, udara, dan daratan.
            </p>
            <div class="c1button">
                <a href="" class="button-3">TRY IT OUT!</a>
            </div>
        </div>
    </div>
    <!-- CONTENT 1 end -->

    <!-- CONTENT 2 start -->
    <div class="content-2">
        <div class="c2-wrapper">
            <img src="{{ asset('images/app1.png') }}" alt="" style="width: 256px; height: 515px"/>
            <img src="{{ asset('images/app2.png') }}" alt="" style="width: 256px; height: 515px"/>
            <img src="{{ asset('images/app3.png') }}" alt="" style="width: 256px; height: 515px"/>
        </div>
    </div>
    <!-- CONTENT 2 end -->
</body>
</html>
