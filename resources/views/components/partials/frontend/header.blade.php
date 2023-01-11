<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('ui/frontend') }}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/style.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Google Font CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/fonts/gilroy-bold/style.css">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/fonts/segoe-ui/style.css">



    <title>mindorbital</title>
</head>

<body>
    <!--   Header area Start-->
    <header class="header-area">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container-fluid">
                @php
                    $settings = App\Models\Setting::first();
                @endphp
                <a class="navbar-brand" href="#">
                    <img width="360" src="{{ asset('storage/settings/' . $settings->logo) }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
