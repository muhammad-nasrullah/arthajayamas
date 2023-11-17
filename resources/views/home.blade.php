<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda |</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar -->
    @include('layout.navbar')
    <!-- End of Navbar -->

    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/kesamber.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/gratis-ongkir.jpg" class="d-block w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                    <img src="assets/member.webp" class="d-block w-100" alt="...">
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                </div>
                <img src="assets/credit-card.svg" alt="">
                <h3 class="fs-2">Ragam Pembayaran</h3>
            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                </div>
                <img src="assets/archive.svg" alt="">
                <h3 class="fs-2">Produk Berkualitas</h3>
            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                </div>
                <img src="assets/check-circle.svg" alt="">
                <h3 class="fs-2">Aman dan Terpercaya</h3>
            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                </div>
                <img src="assets/percent.svg" alt="">
                <h3 class="fs-2">Banyak Diskon</h3>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="assets/jotun.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">JOTUN GARDEX THINNER</h5>
                        <a href="#" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="assets/ikad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IKAD 40X40 SX 61020 (PUTIH POLOS) KW1</h5>
                        <a href="#" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="assets/kuas.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PRIMA KUAS CAT 833 4 Inch</h5>
                        <a href="#" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <img src="assets/brand.webp" class="d-block w-100" alt="...">
    </div>

    <!-- Footer -->
    @include('layout.footer')
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
