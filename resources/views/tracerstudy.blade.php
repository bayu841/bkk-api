<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        .chart-container {
            max-width: 500px;
            margin: 0 auto;
        }

        .chart-legend {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin: 5px 15px;
            font-size: 14px;
        }

        .legend-color {
            width: 12px;
            height: 12px;
            margin-right: 6px;
            border-radius: 50%;
        }

        .fw-semibold {
            font-weight: 600;
        }

        .table-box {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .table th {
            font-weight: 600;
        }

        .btn-filter {
            float: right;
            margin-top: -40px;
        }

        .btn-unduh {
            margin-top: 15px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .category-box {
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            font-weight: 500;
        }

        .category-title {
            background-color: #eee;
            font-weight: 600;
            text-align: center;
        }

        .job-card {
            border-radius: 12px;
            border: 1px solid #e5e5e5;
            margin-bottom: 20px;
            background-color: #fff;
            overflow: hidden;
            transition: 0.2s;
        }

        .job-card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .job-header {
            padding: 15px;
        }

        .job-footer {
            background-color: #f1f5ff;
            padding: 12px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .salary,
        .applicants {
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .salary i,
        .applicants i {
            margin-right: 6px;
        }

        .icon-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #3b82f6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }

        .job-logo {
            width: 50px;
            height: 50px;
            background-color: #ddd;
            border-radius: 50%;
        }

        .fw-semibold {
            font-weight: 600;
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

    <div class="container text-center py-5">
        <h3 class="fw-bold">Grafik Tracer Study</h3>
        <p>Berikut merupakan grafik jejak siswa tahun 2025</p>

        <div class="chart-container my-4">
            <canvas id="tracerChart"></canvas>
        </div>

        <div class="chart-legend">
            <div class="legend-item">
                <div class="legend-color" style="background-color: #00CFFF;"></div> Bekerja (20%)
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background-color: #4BB4FF;"></div> Kuliah (20%)
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background-color: #FFD241;"></div> Wirausaha (15%)
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background-color: #FF646F;"></div> Rumah Tangga (15%)
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background-color: #005EBB;"></div> Wirausaha (15%)
            </div>
        </div>
    </div>
    <div class="container py-5">
        <!-- Judul dan deskripsi -->
        <div class="mb-3">
            <h3 class="fw-bold">Detail Data</h3>
            <p>Berikut detail dari grafik diatas, anda bisa mengunduh<br>Data dibawah ini untuk melihat lebih lengkap
            </p>
            <button class="btn btn-outline-dark btn-sm btn-filter">
                <i class="bi bi-funnel"></i> Filter
            </button>
        </div>

        <!-- Tabel -->
        <div class="table-box">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>JURUSAN</th>
                        <th>TAHUN LULUS</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Mohamad Afdanu Aprilian S.</td>
                        <td>AKUNTANSI</td>
                        <td>2025</td>
                        <td>Bekerja</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Mohamad Afdanu Aprilian S.</td>
                        <td>AKUNTANSI</td>
                        <td>2025</td>
                        <td>Bekerja</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Mohamad Afdanu Aprilian S.</td>
                        <td>AKUNTANSI</td>
                        <td>2025</td>
                        <td>Bekerja</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Mohamad Afdanu Aprilian S.</td>
                        <td>AKUNTANSI</td>
                        <td>2025</td>
                        <td>Bekerja</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center">
                <button class="btn btn-primary btn-unduh">Unduh Data</button>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <!-- Judul -->
        <h3 class="fw-bold text-center mb-5">Lowongan Pendaftar<br>Terbanyak</h3>

        <div class="row">
            <!-- Kolom Kiri: Kategori -->
            <div class="col-md-4">
                <div class="category-box category-title mb-3">Kategori Pekerjaan</div>
                <div class="category-box"><span>Kesehatan</span> <small class="text-muted">Tersedia 3</small></div>
                <div class="category-box"><span>Administrasi</span> <small class="text-muted">Tersedia 3</small></div>
                <div class="category-box"><span>Operator</span> <small class="text-muted">Tersedia 3</small></div>
                <div class="category-box"><span>Teknisi</span> <small class="text-muted">Tersedia 3</small></div>
                <div class="category-box"><span>Industri</span> <small class="text-muted">Tersedia 3</small></div>
                <div class="category-box"><span>Fnb</span> <small class="text-muted">Tersedia 3</small></div>
            </div>

            <!-- Kolom Kanan: Daftar Lowongan -->
            <div class="col-md-8">
                <!-- Kartu Lowongan -->
                <div class="job-card">
                    <div class="job-header d-flex align-items-center">
                        <div class="job-logo me-3"></div>
                        <div>
                            <small class="text-muted">PT. PLN Jakarta</small><br>
                            <span class="fw-semibold">Social Media Specialist</span>
                        </div>
                    </div>
                    <div class="job-footer">
                        <div class="salary"><i class="bi bi-cash-stack"></i> Rp 5.000.000</div>
                        <div class="applicants"><i class="bi bi-people"></i> 100 Pelamar</div>
                        <div class="icon-circle"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>

                <!-- Duplikat Kartu (buat 2x) -->
                <div class="job-card">
                    <div class="job-header d-flex align-items-center">
                        <div class="job-logo me-3"></div>
                        <div>
                            <small class="text-muted">PT. PLN Jakarta</small><br>
                            <span class="fw-semibold">Social Media Specialist</span>
                        </div>
                    </div>
                    <div class="job-footer">
                        <div class="salary"><i class="bi bi-cash-stack"></i> Rp 5.000.000</div>
                        <div class="applicants"><i class="bi bi-people"></i> 100 Pelamar</div>
                        <div class="icon-circle"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header d-flex align-items-center">
                        <div class="job-logo me-3"></div>
                        <div>
                            <small class="text-muted">PT. PLN Jakarta</small><br>
                            <span class="fw-semibold">Social Media Specialist</span>
                        </div>
                    </div>
                    <div class="job-footer">
                        <div class="salary"><i class="bi bi-cash-stack"></i> Rp 5.000.000</div>
                        <div class="applicants"><i class="bi bi-people"></i> 100 Pelamar</div>
                        <div class="icon-circle"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
    <script>
        const ctx = document.getElementById('tracerChart').getContext('2d');
        const tracerChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Bekerja', 'Kuliah', 'Wirausaha', 'Rumah Tangga', 'Wirausaha'],
                datasets: [{
                    data: [20, 20, 15, 15, 15],
                    backgroundColor: [
                        '#00CFFF', // Bekerja
                        '#4BB4FF', // Kuliah
                        '#FFD241', // Wirausaha
                        '#FF646F', // Rumah Tangga
                        '#005EBB' // Wirausaha 2
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false // We use custom legend below
                    }
                }
            }
        });
    </script>
</body>

</html>
