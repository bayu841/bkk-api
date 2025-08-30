<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Daftar Lowongan</title>
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

        body {
            background-color: #fff;
        }

        .job-card {
            border: 1px solid #eee;
            border-radius: 12px;
            transition: all 0.3s ease;
            background-color: #fff;
            height: 100%;
        }

        .job-card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .job-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .job-title {
            font-weight: bold;
        }

        .badge-tab {
            background-color: #4e73df;
            color: white;
            font-size: 0.75rem;
            padding: 5px 10px;
            border-radius: 4px 4px 0 0;
        }

        .badge-tab2 {
            background-color: #EB5A25;
            color: white;
            font-size: 0.75rem;
            padding: 5px 10px;
            border-radius: 4px 4px 0 0;
        }

        .job-footer {
            border-top: 1px solid #eee;
            padding-top: 10px;
            font-size: 0.85rem;
            color: #6c757d;
        }

        .btn-apply {
            font-size: 0.85rem;
            padding: 5px 15px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        .pagination-container {
            display: flex;
            justify-content: flex-end;
            padding: 40px 60px 0 60px;
            margin-right: 5rem;
            margin-top: -3rem;
        }

        .pagination-btn {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 6px;
            border: 1px solid #ccc;
            background-color: white;
            color: #333;
            text-decoration: none;
            margin-left: 10px;
            transition: all 0.2s ease-in-out;
        }

        .pagination-btn:hover {
            background-color: #f0f0f0;
        }

        .pagination-btn.next {
            background-color: #3b82f6;
            color: white;
            border: 1px solid #3b82f6;
        }

        .pagination-btn.next:hover {
            background-color: #2563eb;
            border-color: #2563eb;
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
    <div class="container py-5">
        <!-- Judul -->
        <div class="mb-4">
            <h2 class="fw-bold">Lowongan Pekerjaan</h2>
            <p class="text-muted">Temukan Lowongan Pekerjaan Sesuai Keinginanmu<br>Tersedia +10.000 Lapangan Kerja.</p>
        </div>

        <!-- Filter -->
        <div class="row g-2 align-items-center mb-4">
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Posisi / Perusahaan">
            </div>
            <div class="col-md-4">
                <select class="form-select">
                    <option selected>Pilih Lokasi</option>
                    <option>Jakarta</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary w-50">Cari</button>
            </div>
        </div>

        <!-- Kategori -->
        <div class="mb-2">
            <span class="badge-tab">Administrasi</span>
            <hr class="mt-0 mb-4" style="border-top: 2px solid #4e73df;">
        </div>

        <!-- Kartu Lowongan -->
        <div class="row g-4">
            <!-- Card -->
            <div class="col-md-4">
                <div class="p-3 job-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                        <div>
                            <small class="text-muted">Jakarta, Indonesia</small><br>
                            <strong>Starbucks</strong>
                        </div>
                    </div>
                    <h6 class="job-title">Barista/Bartender</h6>
                    <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="d-flex justify-content-between align-items-center job-footer">
                        <div>
                            <i class="bi bi-clock"></i> Full Time<br>
                            <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                        </div>
                        <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 job-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                        <div>
                            <small class="text-muted">Jakarta, Indonesia</small><br>
                            <strong>Starbucks</strong>
                        </div>
                    </div>
                    <h6 class="job-title">Barista/Bartender</h6>
                    <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="d-flex justify-content-between align-items-center job-footer">
                        <div>
                            <i class="bi bi-clock"></i> Full Time<br>
                            <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                        </div>
                        <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 job-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                        <div>
                            <small class="text-muted">Jakarta, Indonesia</small><br>
                            <strong>Starbucks</strong>
                        </div>
                    </div>
                    <h6 class="job-title">Barista/Bartender</h6>
                    <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="d-flex justify-content-between align-items-center job-footer">
                        <div>
                            <i class="bi bi-clock"></i> Full Time<br>
                            <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                        </div>
                        <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="mb-2">
                <span class="badge-tab2">Operator</span>
                <hr class="mt-0 mb-4" style="border-top: 2px solid #ff4400;">
            </div>
            <!-- Kartu Lowongan -->
            <div class="row g-4" style="margin-top: -2rem">
                <!-- Card -->
                <div class="col-md-4">
                    <div class="p-3 job-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                            <div>
                                <small class="text-muted">Jakarta, Indonesia</small><br>
                                <strong>Starbucks</strong>
                            </div>
                        </div>
                        <h6 class="job-title">Barista/Bartender</h6>
                        <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="d-flex justify-content-between align-items-center job-footer">
                            <div>
                                <i class="bi bi-clock"></i> Full Time<br>
                                <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                            </div>
                            <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 job-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                            <div>
                                <small class="text-muted">Jakarta, Indonesia</small><br>
                                <strong>Starbucks</strong>
                            </div>
                        </div>
                        <h6 class="job-title">Barista/Bartender</h6>
                        <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="d-flex justify-content-between align-items-center job-footer">
                            <div>
                                <i class="bi bi-clock"></i> Full Time<br>
                                <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                            </div>
                            <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 job-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('image/image 114.png') }}" alt="Logo" class="job-logo me-2">
                            <div>
                                <small class="text-muted">Jakarta, Indonesia</small><br>
                                <strong>Starbucks</strong>
                            </div>
                        </div>
                        <h6 class="job-title">Barista/Bartender</h6>
                        <p class="text-muted" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="d-flex justify-content-between align-items-center job-footer">
                            <div>
                                <i class="bi bi-clock"></i> Full Time<br>
                                <i class="bi bi-cash-stack"></i> Rp 1.5 - 3 Juta
                            </div>
                            <a href="{{route('detaillowongan')}}" class="btn btn-primary btn-sm btn-apply">Lamar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagination-container">
        <a href="#" class="pagination-btn">← Previous</a>
        <a href="#" class="pagination-btn next">Next →</a>
    </div>

    <br><br>
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
