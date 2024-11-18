<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-primary">
    <?php include "layout/header.html"; ?>

    <!-- Main Content -->
    <main>
        <p class="text-light text-center mt-4">Halo, selamat datang di website kami!</p>

        <!-- Hero Section -->
        <div id="home-section" class="container mt-5 py-5">
            <div class="text-center">
                <div class="bg-dark p-5 rounded shadow-lg" style="background-image: url('futsal.JPG'); background-size: cover; background-position: center;">
                    <h1 class="display-5 fw-bold text-light" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        Selamat Datang di Rektor Sport Championship
                    </h1>
                    <p class="lead mt-4 mb-5 text-light" style="font-size: 1.25rem; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">
                        Saatnya untuk menunjukkan semangat juang dan kemampuan terbaikmu! Rektor Sport Championship mengundang seluruh mahasiswa
                        Universitas Buana Perjuangan Karawang untuk bergabung dalam ajang olahraga bergengsi ini. Daftarkan dirimu sekarang juga 
                        dan ikuti berbagai cabang perlombaan yang penuh tantangan dan keseruan.
                    </p>
                    <a href="login.html" class="btn btn-primary btn-lg shadow btn-signin">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </a>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div id="about-section" class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="Badminton.JPG" alt="Rektor Sport Championship" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold text-light mb-4">Apa Itu Rektor Sport Championship?</h2>
                    <p class="lead" style="text-align: justify; font-size: 1.2rem;">
                        <strong>Rektor Sport Championship</strong> adalah sebuah ajang olahraga tahunan yang menjadi kebanggaan 
                        Universitas Buana Perjuangan Karawang. Event ini mempertemukan mahasiswa dari berbagai program pendidikan 
                        untuk bersaing secara sehat di berbagai cabang olahraga.
                    </p>
                    <p class="lead" style="text-align: justify; font-size: 1.2rem;">
                        Selain sebagai arena kompetisi, acara ini juga menjadi wadah untuk mempererat kebersamaan, menciptakan 
                        semangat kolaborasi, dan mendorong fair play di lingkungan kampus.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <footer id="contact-section" class="bg-light text-dark pt-5 pb-3 mt-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        <h5 class="mb-4">Hubungi Kami</h5>
                        <div class="d-flex justify-content-start mb-4">
                            <a href="https://instagram.com/rscubpk" target="_blank" class="text-dark mx-3">
                                <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                            </a>
                            <a href="https://wa.me/6287811192774" target="_blank" class="text-dark mx-3">
                                <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-right">
                        <h5 class="mb-4">Partnership</h5>
                        <div class="d-flex justify-content-end mb-4">
                            <a href="https://www.djarum.com/home#sec-2" target="_blank" class="mx-3">
                                <img src="djarum.png" alt="Sponsor 1" style="height: 40px;">
                            </a>
                            <a href="https://ubpkarawang.ac.id/" target="_blank" class="mx-3">
                                <img src="logoubp.png" alt="Sponsor 2" style="height: 40px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="small">© 2024 Rektor Sport Championship.</p>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
