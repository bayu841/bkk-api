<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Satoshi Variable', sans-serif;
        }

        .btn-navbar {
            padding: 12px 12px;
            width: 200px;
            color: #fff;
            background-color: #406AE7;
            border: none;
        }

        nav {
            background-color: #ffffff;
            font-weight: bold;
            height: 80px;
            width: 100%;
            position: fixed;
            left: 0;
            right: 0;
            display: flex;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            z-index: 999;
        }

        nav ul {
            display: flex;
            gap: 24px;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
        }

        nav ul img {
            margin-right: 45rem;
            margin-left: 2rem;
        }

        .hero {
            padding: 7rem;
            padding-top: 10rem;
        }

        .hero img {
            width: 20px background-image: url('/image/hero.png');
        }

        .hero h1 {
            font-weight: bold;
        }

        .input1 {
            padding: 12px 12px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
        }

        .dropdown {
            padding: 12px 12px;
            width: 200px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
        }

        select {
            width: 250px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            color: #555;
            outline: none;
            height: 42px;
        }

        select:focus {
            border-color: #3c53d1;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        .search {
            padding: 12px 12px;
            color: #fff;
            background-color: #3c53d1;
            width: 50px;
            border-radius: 5px;
            text-align: center;
        }

        .container-2 {
            display: flex;
            gap: 5px;
        }

        .daftar {
            padding: 12px 12px;
            color: #ffffff;
            border-radius: 5px;
            border: none;
            background-color: #3c53d1;
        }

        .wave img {
            margin-top: -2rem;
            width: 100%;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1100px;
            margin: 50px auto;
            gap: 40px;
            width: 100%;
        }

        /* KIRI */
        .left {
            flex: 1;
            position: relative;
        }

        .main-img {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
        }

        .small-img {
            position: absolute;
            bottom: 20px;
            right: -20px;
            width: 150px;
            border-radius: 12px;
            border: 4px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .badge {
            position: absolute;
            bottom: -40px;
            left: 0;
            background: #2563eb;
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .badge span {
            display: block;
            font-size: 12px;
            font-weight: normal;
        }

        /* KANAN */
        .right {
            flex: 1;
        }

        .right h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .right p {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 25px;
            color: #555;
        }

        .card {
            background: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon {
            width: 40px;
            height: 40px;
            background: #e0f2ff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 18px;
            color: #2563eb;
        }

        .profile {
            display: flex;
            align-items: center;
            margin: 20px 0;
            gap: 12px;
        }

        .profile img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .container-4 {
            display: flex;
            max-width: 1200px;
            margin: 30px auto;
            gap: 20px;
        }


        .left {
            flex: 2;
        }

        .left h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .left p {
            color: #666;
            margin-bottom: 20px;
        }

        .job-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .job-info {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .job-info img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: contain;
            background: #fff;
            padding: 5px;
        }

        .job-text h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .job-text p {
            font-size: 13px;
            color: #555;
        }

        .qr {
            width: 70px;
            height: 70px;
            background: #eee;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #999;
        }

        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile {
            background: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            text-align: center;

        }

        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .profile h4 {
            margin-bottom: 5px;
        }

        .steps,
        .latest {
            background: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .steps h3,
        .latest h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .steps ul {
            list-style: none;
        }

        .steps ul li {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }

        .latest ul {
            list-style: none;
        }

        .latest ul li {
            margin-bottom: 12px;
            font-size: 14px;
            color: #333;
        }

        .latest ul li small {
            display: block;
            color: #777;
            font-size: 12px;
        }
    </style>
    <nav>
        <ul>
            <li><img src="{{ asset('image/logo.png') }}" alt="" width="200"></li>
            <li><a href="">Beranda</a></li>
            <li><a href="">Tentang</a></li>
            <li><a href="">Loker</a></li>
            <li><a href="">Perusahaan</a></li>
        </ul>
    </nav><br><br><br><br>
    <div class="hero">
        <p>SMKN 6 JEMBER</p>
        <h1>Cari Lowongan Kerja</h1>
        <div class="container-2">
            <div class="input">
                <input type="text" placeholder="Posisi/Perusaahaan" class="input1">
                <select>
                    <option selected disabled>Pilih Lokasi</option>
                    <option value="developer">Jember</option>
                    <option value="designer">Malang</option>
                    <option value="marketing">Surabaya</option>
                    <option value="manager">Sidoarjo</option>
                </select>
            </div>
            <div class="search">Cari</div>
        </div><br>
        <p>Daftar Sekarang dan dapatkan pekerjaan secepatnya</p><br>
        <button class="daftar">Daftar Sekarang</button>
    </div>
    <div class="wave">
        <img src="{{ asset('image/Vector 46.png') }}" alt="" width="100%">
        <img src="{{ asset('image/Rectangle 436.png') }}" alt="">
        <img src="{{ asset('image/Vector 47.png') }}" alt="">
    </div>
    <div class="container">

        <div class="left">
            <img src="{{ asset('image/Rectangle 463.png') }}" class="main-img" alt="Foto Utama">
            <img src="{{ asset('image/Rectangle 464.png') }}" class="small-img" alt="Foto Kecil">
            <div class="badge">1.000+ <span>Siswa Unggul</span></div>
        </div>

        <div class="right">
            <h2>Tentang BKK</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="card">
                <div class="icon">💼</div>
                <div>
                    <strong>Lowongan Kerja Terbaik</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">🌐</div>
                <div>
                    <strong>Relasi Luas</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="profile" style="width: 500px">
                <img src="{{ asset('image/Rectangle 464.png') }}" alt="Profil">
                <div>
                    <strong>Audryan, S.Pd</strong><br>
                    <small>Guru BKK</small>
                </div>
                <a href="#" class="btn">Hubungi Sekarang</a>
            </div>
        </div>
    </div><br><br><br>
    <div class="container-4">

        <div class="left">
            <h2>Lowongan Pekerjaan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

            <div class="job-card">
                <div class="job-info">
                    <img src="https://picsum.photos/50" alt="Logo">
                    <div class="job-text">
                        <h3>Welding Leader | PT Yoyon Pribadi</h3>
                        <p>Lokasi: Surabaya | Deadline: 30 Sept 2025</p>
                    </div>
                </div>
                <div class="qr">QR Code</div>
            </div>

            <div class="job-card">
                <div class="job-info">
                    <img src="https://picsum.photos/51" alt="Logo">
                    <div class="job-text">
                        <h3>Staf Crew | PT Duta Intibudimaya</h3>
                        <p>Lokasi: Jakarta | Deadline: 15 Okt 2025</p>
                    </div>
                </div>
                <div class="qr">QR Code</div>
            </div>

            <div class="job-card">
                <div class="job-info">
                    <img src="https://picsum.photos/52" alt="Logo">
                    <div class="job-text">
                        <h3>Salesman | PT Indogood Ecip</h3>
                        <p>Lokasi: Bandung | Deadline: 5 Okt 2025</p>
                    </div>
                </div>
                <div class="qr">QR Code</div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="right">
            <div class="profile">
                <img src="https://picsum.photos/80" alt="Profile">
                <h4>BKK Admin</h4>
                <small>SMK Example</small>
            </div>

            <div class="steps">
                <h3>Alur Pendaftaran Pekerjaan</h3>
                <ul>
                    <li>1. Daftar Akun</li>
                    <li>2. Lengkapi Profil</li>
                    <li>3. Upload Berkas</li>
                    <li>4. Pilih Lowongan</li>
                    <li>5. Cetak Kartu</li>
                </ul>
            </div>

            <div class="latest">
                <h3>Lowongan Teratas</h3>
                <ul>
                    <li>Operator Produksi | PT ABC <small>Jakarta</small></li>
                    <li>Admin Kantor | PT XYZ <small>Bandung</small></li>
                    <li>Marketing | PT Maju Jaya <small>Surabaya</small></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
