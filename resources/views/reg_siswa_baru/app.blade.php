<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<body>

    {{-- <div class="overlay-preloader" id="loading">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Registrasi Siswa Baru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
                    <a class="nav-link" href="#">FAQ</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section id="contact" class="container my-5">
        <h2 class="text-center mb-4 fw-bold"></h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="name"
                        placeholder="Masukkan nama lengkap" />
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" />
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"
                        placeholder="Tulis Alamat Lengkap, cth: JL. Abc No.1 Rt 001 Rw 004 Kelurahan Abc Kecamatan Abc Kota Abc Provinsi Abc"></textarea>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="name@example.com" />
                </div>


                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telepon</label>
                    <input type="num" class="form-control" name="no_telp" id="no_telp" placeholder="0812345678" />
                </div>

                <div class="mb-3 text-center">
                    <video autoplay="true" width="250" id="webcam"></video>
                </div>

                <div class="mb-3 text-center">
                    <button class="btn btn-success btn-md" type="button" id="btnImg">Ambil
                        Gambar</button>
                </div>

                <button type="submit" id="submit" class="btn btn-primary w-100">Kirim</button>
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
    <script>
        const form = document.getElementById('dataForm');
        const video = document.getElementById('webcam');
        // const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('btnImg');
        const submit = document.getElementById('submit');

        // Membuat elemen canvas untuk menampung gambar ketika di capture
        const canvas = document.createElement('canvas');
        canvas.width = 250;
        canvas.height = 200;


        navigator.mediaDevices.getUserMedia({
            video: true
        }).then(stream => {
            video.srcObject = stream;
            video.play();
            video.style.transform = 'scaleX(-1)';
        }).catch(error => console.error('Error accessing webcam:', error));

        // ambil gambar
        captureButton.addEventListener('click', () => {

            // Menampilkan gambar ke elemen canvas
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            canvas.style.transform = 'scaleX(-1)';

            // Mengubah format ke bentuk jpeg
            const imageData = canvas.toDataURL('image/jpeg');

            // Hentikan webcam
            const stream = video.srcObject;
            const tracks = stream.getTracks();
            tracks.forEach(track => track.stop());

            // Ganti elemen video dengan canvas
            video.parentNode.replaceChild(canvas, video);

            // Kirim imageData ke server
            // fetch('/api/capture', {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json'
            //         },
            //         body: JSON.stringify({
            //             image: imageData
            //         })
            //     }).then(response => response.json())
            //     .then(data => {
            //         // Lakukan sesuatu dengan respons dari server (misalnya, tampilkan pesan)
            //     })
            //     .catch(error => console.error('Error sending data:', error));
        });

        submit.addEventListener('click', () => {
            // e.preventDefault();

            // const formData = new FormData('form');
            const imageUrl = canvas.toDataURL('image/jpeg');
            console.log(imageUrl);
            // fetch(" route('data.store')", {
            //         method: 'POST',
            //         header: {
            //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            //         },
            //         data: {
            //             'nama_lengkap': nama,
            //             'tanggal_lahir': tanggal_lahir,
            //             'alamat': alamat,
            //             'email': email,
            //             'no_telp': no_telp,
            //             'image': imageUrl
            //         }
            //     })
            //     .then(response => {
            //         if (!response.ok) {
            //             return response.json().then(err => Promise.reject(err));
            //         }
            //         return response.json();
            //     })
            //     .then(data => {
            //         result.innerText = data.message;
            //         form.reset();
            //     })
            //     .catch(error => {
            //         if (error.errors) {
            //             const msg = Object.values(error.errors).flat().join(', ');
            //             // result.innerText = 'Error: ' + msg;
            //             console.log('Error: ' + msg);
            //         } else {
            //             // result.innerText = 'Gagal menyimpan data.';
            //             console.log('Gagal menyimpan data');

            //         }
            //     });
        });
    </script>
</body>

</html>
