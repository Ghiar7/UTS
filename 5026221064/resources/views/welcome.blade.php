<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SMA Negeri 1 Surakarta</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .top-header {
            background-color: #004d61;
            color: white;
            padding: 10px 0;
        }
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        .hero {
            height: 870px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .carousel{
            width: 2500px;
            height: 870px;
        }
    </style>
</head>
<body>

<!-- Header Kontak -->
<header class="top-header text-center">
    <div class="container">
        <i class="fas fa-phone"></i> (0271) 652975 |
        <i class="fas fa-map-marker-alt"></i> Jl. Monginsidi No.40, Gilingan, Kec. Banjarsari |
        <i class="fas fa-envelope"></i> surat@sman1-slo.sch.id
    </div>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://th.bing.com/th/id/R.9d3c3276cad7f258ccc8552f4e7cdf2b?rik=neTJFnUrIUfDHA&riu=http%3a%2f%2f3.bp.blogspot.com%2f_raOhhvZJibk%2fSUw1IJ3ch0I%2fAAAAAAAAAAo%2fXT975rpGdPM%2fS230%2f1_517846211l%5b1%5d.jpg&ehk=5XUE8CRzGFNIjlgKOM1u4KAAIN6BSWEB3vV69GGeCIk%3d&risl=&pid=ImgRaw&r=0" alt="Logo">
            <span>SMA Negeri 1 Surakarta</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('news') }}">News</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('gallery') }}">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('mpls') }}">MPLS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('location') }}">Location</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('assignments') }}">Assignments</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero">
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/SMANSA.jpg" alt="Los Angeles" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/SMANSA2.jpg" alt="Chicago" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/SMANSA3.jpg" alt="New York" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 SMA Negeri 1 Surakarta. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
