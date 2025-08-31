<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survei - Form</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

        nav ul img{
            margin-right: 42rem;
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
    </style>
      <nav>
        <ul>
            <li><img src="{{ asset('image/logo.png') }}" alt="" width="200"></li>
            <li><a href="{{route('home')}}">Beranda</a></li>
            <li><a href="{{route('home')}}">Tentang</a></li>
            <li><a href="{{route('daftarlowongan')}}">Loker</a></li>
            <li><a href="{{route('home')}}">Perusahaan</a></li>
            <i class="bi bi-person-circle" style="font-size: 3rem; color: #2563eb; font-size:40px;"></i>
        </ul>
    </nav><br><br><br>
    <section class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="p-4 shadow-sm bg-white rounded" style="max-width: 600px; width: 100%;">
            <h4 class="fw-bold mb-4">Survey Form</h4>

            <form>
                <!-- Tahun Lulus -->
                <div class="mb-3">
                    <label for="tahun_lulus" class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tahun_lulus" placeholder="Masukkan Tahun Lulus">
                </div>

                <!-- Jurusan -->
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan <span class="text-danger">*</span></label>
                    <select class="form-select" id="jurusan" required>
                        <option selected disabled>Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="BD">BD</option>
                        <option value="DKV">DKV</option>
                    </select>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                </div>

                <!-- Status Pekerjaan -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status Pekerjaan <span class="text-danger">*</span></label>
                    <select class="form-select" id="status" required>
                        <option selected disabled>Pilih Status</option>
                        <option value="Bekerja">Bekerja</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Kuliah">Kuliah</option>
                        <option value="Belum Bekerja">Belum Bekerja</option>
                    </select>
                </div>

                <!-- Tempat/Instansi Kerja -->
                <div class="mb-3">
                    <label for="instansi" class="form-label">Tempat/Instansi Kerja <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="instansi" placeholder="Masukkan Tempat/Instansi">
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-primary">Kembali</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
