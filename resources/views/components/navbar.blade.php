<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css1/owl.carousel.min.css">
	<link rel="stylesheet" href="css1/owl.theme.default.min.css">
	<link rel="stylesheet" href="css1/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css1/daterangepicker.css">
	<link rel="stylesheet" href="css1/aos.css">
	<link rel="stylesheet" href="css1/style.css">

    <title>Index</title>

    <style>
        #btnLogin:hover {
            background-color: black !important;
            border-color: black !important;
        }
        #btnLogin{
            background-color: green!important;
            border-color: green!important;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="img/logo.png" height="25" alt="MDB Logo" loading="lazy">
                </a>
            </div>

            <!-- Center nav -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Search form and cart -->
            <form class="d-flex input-group w-auto mr-5">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </form>

            <!-- Spacer -->
            <div style="width: 20px;"></div>

            <!-- Cart and Login Button -->
            <div class="d-flex align-items-center">
                <!-- Cart Icon -->
                <a class="text-reset me-4" href="#">
                    <i class="fas fa-shopping-cart" style="font-size: 20px;"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>

                <!-- Login Button -->
                <button data-mdb-ripple-init type="button" id="btnLogin" class="btn btn-primary me-3 custom-button-style">
                    Login
                </button>
            </div>
        </div>
    </nav>

