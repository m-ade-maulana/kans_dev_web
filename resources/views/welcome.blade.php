<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kans Developer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- Custom --}}
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
</head>

<body onload="hide_loader();">

    <div class="overlay-preloader" id="loading">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Kans Developer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
                    <a class="nav-link" href="#services">Layanan</a>
                    <a class="nav-link" href="#community">Komunitas</a>
                    <a class="nav-link" href="#contact">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <h1>Selamat Datang Kans Developer</h1>
            <p>Kans Developer adalah komunitas aktif di SMK Nusantara 1 Kota Tangerang yang beranggotakan siswa dan
                siswi Jurusan Rekayasa Perangkat Lunak</p>
            <a href="#services" class="btn btn-light btn-lg mt-4">Jelajahi Layanan Kami</a>
        </div>
    </section>

    <!-- Services / Produk Jasa -->
    <section id="services" class="container my-5">
        <h2 class="text-center fw-bold">Produk Jasa Unggulan</h2>
        <p class="text-center mb-5" style="margin-left: 20%; margin-right: 20%;">Kami juga memiliki kegiatan yang
            membantu
            masyarakat dalam
            bidang teknologi
            seperti membangun website dan
            berkonsultasi seputar bidang IT</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <img loading="lazy"
                        src="https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="card-img-top" alt="Jasa Desain Grafis" />
                    <div class="card-body">
                        <h5 class="card-title">Jasa Desain</h5>
                        <p class="card-text">
                            Solusi kreatif untuk kebutuhan desain logo, poster, dan materi promosi
                            bisnis Anda.
                        </p>
                        <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <img loading="lazy"
                        src="https://images.pexels.com/photos/3184309/pexels-photo-3184309.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="card-img-top" alt="Jasa Pengembangan Web" />
                    <div class="card-body">
                        <h5 class="card-title">Jasa Pengembangan Web</h5>
                        <p class="card-text">
                            Paket pembuatan website profesional dan responsif untuk keperluan pribadi, bisnis hingga
                            organisasi.
                        </p>
                        <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <img loading="lazy"
                        src="https://images.pexels.com/photos/3182760/pexels-photo-3182760.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="card-img-top" alt="Jasa Konsultasi Digital Marketing" />
                    <div class="card-body">
                        <h5 class="card-title">Jasa Konsultasi IT</h5>
                        <p class="card-text">
                            Untuk anda yang mempunyai bisnis melibatkan infrastruktur IT atau media digital seperti
                            sosial media.
                        </p>
                        <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="community" class="community-section">
        <div class="container">
            <h2 class="mb-4 fw-bold">Tentang Komunitas Kami</h2>
            <p class="lead mb-4 max-w-600 mx-auto">
                Komunitas Kreatif adalah wadah bagi para profesional, pelaku usaha, dan penyedia jasa
                untuk saling berbagi, belajar, dan berkembang bersama. Di sini kami mendukung
                kolaborasi dan pertumbuhan bisnis Anda dengan pendekatan inovatif dan suportif.
            </p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 h-100">
                        <div class="text-primary display-4 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M13 7a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                <path fill-rule="evenodd" d="M2 15s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H2z" />
                            </svg>
                        </div>
                        <h5>Jaringan Luas</h5>
                        <p>
                            Terhubung dengan banyak profesional dari berbagai bidang untuk saling mendukung.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 h-100">
                        <div class="text-primary display-4 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                <path d="M7.5 1v5H5L9 15v-4h2L7.5 1z" />
                            </svg>
                        </div>
                        <h5>Inovasi Terus Menerus</h5>
                        <p>
                            Mendukung ide-ide baru dan implementasi teknologi terbaru untuk layanan berkualitas.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 h-100">
                        <div class="text-primary display-4 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.956 1.745C7.021.81 7.908.087 8.864.325c.955.237 1.3 1.1 1.39 1.62.023.128.142.586.176.763.04.223-.012.587-.014.64a.272.272 0 0 0 .103.178c.106.078.53.387.885.789.737.898 1.19 3.06.282 5.125-.353.816-1.115 2.305-3.272 2.29-.252 0-.553-.031-.764-.128-.335-.157-.55-.375-.693-.679a1.22 1.22 0 0 1-.091-.322c-.291-.013-.973-.08-1.405-.133-.066-.01-.164-.07-.166-.17-.004-.134.099-.167.143-.176.098-.022.248-.068.452-.134.132-.045.54-.263.65-.48.042-.091.02-.189-.08-.378-.06-.113-.492-.785-.657-1.062-.05-.09-.112-.147-.19-.16-.064-.011-.396-.022-.523-.034-.241-.016-.49-.098-.613-.29-.168-.259-.271-.53-.31-.908a4.598 4.598 0 0 1 0-.957c.026-.216.054-.438.08-.682.04-.404.227-.873.64-1.348.238-.287.561-.63.937-.935z" />
                            </svg>
                        </div>
                        <h5>Komitmen Kualitas</h5>
                        <p>
                            Setiap anggota berkomitmen memberikan layanan terbaik dengan profesionalisme tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Masukkan nama lengkap" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2025 Kans Developer. All rights reserved.</p>
            <div>
                <a href="#" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5 9.341-9.334 0-.14 0-.282-.01-.422A6.674 6.674 0 0 0 16 3.542a6.492 6.492 0 0 1-1.894.518A3.3 3.3 0 0 0 15.555 2a6.606 6.606 0 0 1-2.084.797 3.286 3.286 0 0 0-5.594 2.995A9.325 9.325 0 0 1 1.11 2.1a3.286 3.286 0 0 0 1.017 4.382A3.323 3.323 0 0 1 .64 6.575v.04a3.284 3.284 0 0 0 2.635 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.616-.06 3.288 3.288 0 0 0 3.067 2.28A6.588 6.588 0 0 1 .78 13.58 6.32 6.32 0 0 1 0 13.546a9.344 9.344 0 0 0 5.026 1.472" />
                    </svg>
                </a>
                <a href="#" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM5.5 8a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0z" />
                        <path
                            d="M12.75 1h-9.5A2.75 2.75 0 0 0 .5 3.75v9.5A2.75 2.75 0 0 0 3.25 16h9.5A2.75 2.75 0 0 0 15.5 13.25v-9.5A2.75 2.75 0 0 0 12.75 1zm1.75 11.25a1.75 1.75 0 0 1-1.75 1.75h-9.5a1.75 1.75 0 0 1-1.75-1.75v-9.5a1.75 1.75 0 0 1 1.75-1.75h9.5a1.75 1.75 0 0 1 1.75 1.75v9.5z" />
                        <path d="M12 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/preloader.js"></script>
</body>

</html>

```
