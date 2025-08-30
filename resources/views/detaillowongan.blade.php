<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Lowongan</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <style>
        nav {
            background-color: #ffffff;
            font-weight: bold;
            height: 80px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            z-index: 999;
        }

        nav ul img {
            margin-right: 45rem;
        }

        nav ul {
            display: flex;
            gap: 24px;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
        }

        .container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem
        }

        .job-header {
            position: relative;
            background-image: url('{{ asset('image/image 116.png') }}');
            background-size: cover;
            background-position: center;
            height: 300px;
            z-index: 1;
        }

        .logo {
            position: absolute;
            width: 100px;
            margin-top: -40px;
            border: 4px solid white;
            border-radius: 50%;
            margin-top: -7rem;
            z-index: 99;
            margin-left: 2rem;
        }

        .card-form {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-upload {
            border: 2px dashed #ced4da;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            color: #6c757d;
        }

        .form-upload:hover {
            background-color: #f8f9fa;
        }

        ul {
            padding-left: 20px;
        }

        .footer {
            background-color: #ffffff;
            padding: 40px 60px;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 30px;
        }

        .footer-logo {
            max-width: 160px;
            margin-bottom: 15px;
        }

        .footer h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer p {
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer ul li a {
            text-decoration: none;
            font-size: 14px;
            color: #333;
            transition: 0.3s;
        }

        .footer ul li a:hover {
            color: #007bff;
        }

        .footer .logo {
            font-size: 24px;
            font-weight: bold;
            color: #1e62d0;
            margin-bottom: 10px;
        }

        .footer .social {
            margin: 15px 0;
        }

        .footer .social a {
            display: inline-block;
            margin-right: 10px;
            font-size: 16px;
            color: #333;
            transition: 0.3s;
        }

        .footer .social a:hover {
            color: #007bff;
        }

        .footer .logos img {
            height: 30px;
            margin: 5px 10px 0 0;
        }
    </style>
    <nav>
        <ul>
            <li><img src="{{ asset('image/logo.png') }}" alt="" width="200"></li>
            <li><a href="{{route('home')}}">Beranda</a></li>
            <li><a href="{{route('home')}}">Tentang</a></li>
            <li><a href="{{route('daftarlowongan')}}">Loker</a></li>
            <li><a href="{{route('home')}}">Perusahaan</a></li>
        </ul>
    </nav><br><br><br><br><br>
    <div class="container mt-3">
        <h4 class="mb-3 fw-bold">Detail Lowongan</h4>
        <div class="job-header rounded mb-5"></div>

        <div class="row">
            <!-- Kiri (Deskripsi dan Syarat) -->
            <div class="col-lg-7">
                <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="logo mb-3">
                <h5>Starbucks</h5>
                <h3>Barista/Bartender</h3>
                <span class="badge bg-primary me-2">Fulltime</span>
                <span class="text-muted">Roxy Square, Jember</span>

                <div class="mt-4">
                    <h5>Deskripsi</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                </div>

                <div class="mt-4">
                    <h5>Persyaratan</h5>
                    <ul>
                        <li>Mampu mengoperasikan mesin espresso dan melakukan kalibrasi untuk kopi</li>
                        <li>Mampu bekerja secara efisien dalam tim</li>
                        <li>Memiliki penampilan yang baik dan memahami kerajinan pelanggan</li>
                        <li>Mampu menangani banyak tugas sekaligus</li>
                    </ul>
                </div>
            </div>

            <!-- Kanan (Form) -->
            <div class="col-lg-5">
                <div class="card p-4 card-form">
                    <h5 class="mb-3">Form Lamaran</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CV</label>
                            <div class="form-upload">
                                <input type="file" class="form-control d-none" id="uploadCv">
                                <label for="uploadCv">Upload CV Anda Disini</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary me-2">Hapus</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <footer class="footer">
        <div>
            <img src="{{ asset('image/logo.png') }}" alt="BKKBISA Logo" class="footer-logo">
            <p>BKKBISA merupakan platform penyedia informasi lowongan pekerjaan berbasis online</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="logos">
                <img src="{{ asset('image/logokementrian.png') }}">
            </div>
        </div>
        <div>
            <h3>Pencari Kerja</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Tips Karier</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">Bantuan mencari kerja</a></li>
            </ul>
        </div>
        <div>
            <h3>BKK / Yayasan</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Masuk</a></li>
                <li><a href="#">Pasang Iklan Lowongan</a></li>
                <li><a href="#">Tracking Alumni</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Bantuak BKK / Yayasan</a></li>
            </ul>
        </div>
        <div>
            <h3>Perusahaan / UMKM</h3>
            <ul>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Masuk</a></li>
                <li><a href="#">Pasang Iklan Lowongan</a></li>
                <li><a href="#">Cari Resume</a></li>
                <li><a href="#">Ketentuan Penggunaan</a></li>
                <li><a href="#">Bantuan Perusahaan</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
